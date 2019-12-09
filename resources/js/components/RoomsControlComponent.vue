<template>
    <section class="">
        <div class="row">
            <div class="col-md-12 text-right">
                <button type="button" @click="releaseRooms" class="btn btn-primary" data-toggle="modal" data-target="#rooms">
                    Releasing rooms
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h4>Requeriment of room</h4>
                <ul class="list-group" style="margin-top: 20px;">
                    <li class="list-group-item" :class="{ 'active': requerimentRoom == 'all'  }" @click="requerimentRoom = 'all'">All</li>
                    <li class="list-group-item" :class="{ 'active': requerimentRoom == 'Vacancy'  }" @click="requerimentRoom = 'Vacancy'">Vacancy (VC)</li>
                    <li class="list-group-item" :class="{ 'active': requerimentRoom == 'Check Out'  }" @click="requerimentRoom = 'Check Out'">Check Out (CO)</li>
                    <li class="list-group-item" :class="{ 'active': requerimentRoom == 'Stay Over'  }" @click="requerimentRoom = 'Stay Over'">Stay Over (SO)</li>
                    <li class="list-group-item" :class="{ 'active': requerimentRoom == 'Pending Review'  }" @click="requerimentRoom = 'Pending Review'">Pending Review (PR)</li>
                    <li class="list-group-item" :class="{ 'active': requerimentRoom == 'Rush'  }" @click="requerimentRoom = 'Rush'">Rush (RR)</li>
                </ul>

                <h4 class="mt-4">Type of room</h4>
                <ul class="list-group" style="margin-top: 20px;">
                    <li class="list-group-item" :class="{ 'active':typeRoom == 'all'  }" @click="typeRoom = 'all'">All</li>
                    <li class="list-group-item" :class="{ 'active':typeRoom == 'sencilla'  }" @click="typeRoom = 'sencilla'">Sencilla</li>
                    <li class="list-group-item" :class="{ 'active':typeRoom == 'doble'  }" @click="typeRoom = 'doble'">Doble</li>
                    <li class="list-group-item" :class="{ 'active':typeRoom == 'matrimonial'  }" @click="typeRoom = 'matrimonial'">Matrimonial</li>
                </ul>

                <ul class="list-group" style="margin-top: 20px;">
                    <li class="list-group-item text-center">
                        <button class="btn btn-primary" @click="changeRandomStatus">Get current data</button>
                    </li>
                </ul>
            </div>
            <div class="col-md-9">
                <h4>All rooms</h4>
                <div class="row" v-for="(floor, index) in filterRooms" :key="index">
                    <div class="col-md-12" style="margin-top: 10px;">
                        <h6>{{ floor.name }}</h6>
                    </div>
                    <div class="col-md-3 item" v-for="(room, index) in floor.rooms_floor" :key="index" @click="changeStatus(room)" :data-id="room.id" :data-floorid="room.floor_id">
                        <div class="card m-b-30 room" :class="{ 'bg-success-gradient': room.status == isVacancy, 'bg-danger-gradient': room.status == isCheckOut, 'bg-warning-gradient': room.status == isStayOver, 'bg-primary-gradient': room.status == isPendingReview, 'bg-secondary-gradient': room.status == isRush }">
                            <div class="card-body">
                                <div class="xp-widget-box text-white text-center pt-3">
                                    <p class="xp-icon-timer mb-4">{{ room.id }}</p>
                                    <h4 class="mb-2 font-20">{{ room.type }}</h4>
                                    <p class="mb-3 small">
                                        {{ room.status}}
                                        <span v-if="room.status == 'Vacancy'"> (VC)</span>
                                        <span v-if="room.status == 'Check Out'"> (CO)</span>
                                        <span v-if="room.status == 'Rush'"> (RR)</span>
                                        <span v-if="room.status == 'Stay Over'"> (SO)</span>
                                        <span v-if="room.status == 'Pending Review'"> (PR)</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="rooms" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Releasing notifications</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group list-group-flush">
                        <li v-for="(user, index) in users" :key="index" class="list-group-item">{{ user.name }}
                            <b-progress :value="value" :max="max" show-progress animated></b-progress>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" :disabled="value != 100" class="btn btn-primary" :class="{ 'btn-success': value == 100 }">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import interact from 'interactjs';

export default {
    data(){
        return{
            floors: [],
            users: [],
            max: 100,
            value: 0,
            //Tipos de habitaciones
            typeRoom: 'all',
            isVacancy: 'Vacancy',
            isCheckOut: 'Check Out',
            isStayOver: 'Stay Over',
            isPendingReview: 'Pending Review',
            isRush: 'Rush',
            //Tipos de requerimientos
            requerimentRoom: 'all',
        }
    },
    created(){
        this.getFloors()
        this.getUsers()

        interact('.item')
            .on('hold', (event) => {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "This will make a RUSH!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, I want a Rush!'
                }).then((result) => {
                    if (result.value) {
                        let id = event.currentTarget.dataset.id;
                        let florID = event.currentTarget.dataset.floorid;
                        
                        let URL = '/control/rooms/update-status/' + id
                        let status = 'Rush'

                        axios.put(URL, { 'status': status }).then((response) => {
                            let foundFloor = this.floors.find(element => element.id == florID)
                            let foundRoom = foundFloor.rooms_floor.find(element => element.id == id);
                            foundRoom.status = status

                            Swal.fire(
                                'Success!',
                                'This room has been rushed.',
                                'success'
                            )
                        })
                        
                    }
                })
                
            })
    },
    computed: {
        filterRooms(){
            if(this.typeRoom == 'all' && this.requerimentRoom == 'all'){
                return this.floors
            }
            if(this.requerimentRoom == 'all'){
                let newArray = []
                for (let i = 0; i < this.floors.length; i++) {
                    let floor = JSON.parse( JSON.stringify( this.floors[i] ) );
                    let rooms = floor.rooms_floor.filter(item => (item.type == this.typeRoom))
                    floor.rooms_floor = JSON.parse( JSON.stringify( rooms ) );
                    newArray.push(floor)
                }
                return newArray
            }

            if(this.typeRoom != 'all'){
                let newArray = []
                for (let i = 0; i < this.floors.length; i++) {
                    let floor = JSON.parse( JSON.stringify( this.floors[i] ) );
                    let rooms = floor.rooms_floor.filter(item => (item.type == this.typeRoom && item.status == this.requerimentRoom))
                    floor.rooms_floor = JSON.parse( JSON.stringify( rooms ) );
                    newArray.push(floor)
                }
                return newArray
            }else{
                let newArray = []
                for (let i = 0; i < this.floors.length; i++) {
                    let floor = JSON.parse( JSON.stringify( this.floors[i] ) );
                    let rooms = floor.rooms_floor.filter(item => (item.status == this.requerimentRoom))
                    floor.rooms_floor = JSON.parse( JSON.stringify( rooms ) );
                    newArray.push(floor)
                }
                return newArray
            }
        },
    },
    methods: {
        changeRandomStatus(){
            let timerInterval
            Swal.fire({
            title: 'Getting status from PMS!',
            html: 'Getting <b></b> bytes of data.',
            timer: 2000,
            timerProgressBar: true,
            onBeforeOpen: () => {
                Swal.showLoading()
                timerInterval = setInterval(() => {
                Swal.getContent().querySelector('b')
                    .textContent = Swal.getTimerLeft()
                }, 100)
            },
            onClose: () => {
                clearInterval(timerInterval)
            }
            }).then((result) => {
            if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.timer
                
            ) {
                let status = ['Stay Over', 'Vacancy', 'Check Out', 'Pending Review']
                this.floors.forEach((element) => {
                    element.rooms_floor.forEach((item) => {
                        let state = status[Math.floor(Math.random() * status.length)]
                        item.status = state
                    })
                })
            }
            })
        },

        async getFloors(){
            try {
                let URL = '/control/get-floors'

                let response = await axios.get(URL)

                if(response){
                    this.floors = response.data
                }
            } catch (e) {
            
            }
        },

        async getUsers(){
            try {
                let URL = '/control/get-users'

                let response = await axios.get(URL)
                if(response){
                    this.users = response.data
                }
            } catch (e) {
                console.log(e)
            }
        },

        changeStatus(room){
            switch (room.status) {
                case null:
                    this.updateStatus(room, 'Vacancy')
                    break;
                case 'Vacancy':
                    this.updateStatus(room, 'Check Out')
                    break;
                case 'Check Out':
                    this.updateStatus(room, 'Stay Over')
                    break;
                case 'Stay Over':
                    this.updateStatus(room, 'Pending Review')
                    break;
                case 'Pending Review':
                    this.updateStatus(room, 'Vacancy')
                    break;
                case 'Rush':
                    this.updateStatus(room, 'Vacancy')
                    break;
            
                default:
                    break;
            }
        },

        releaseRooms(){
            var id = setInterval(() => {
                if (this.value == 100) {
                    clearInterval(id);
                } else {
                    this.value++
                }
            }, 80);
        },

        async updateStatus(room, status){
            try {
                let URL = '/control/rooms/update-status/' + room.id

                let response = await axios.put(URL, { 'status': status })
                if(response){
                    let foundFloor = this.floors.find(element => element.id == room.floor_id)
                    let foundRoom = foundFloor.rooms_floor.find(element => element.id == room.id);
                    foundRoom.status = status
                    console.log('actualizado')
                }
            } catch (e) {
            
            }
        },
    },
}
</script>

<style>
    .room{
        position: relative;
        cursor: pointer;
    }

    .room:before {
        content:'';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0,0,0,0.2);
        border-radius: 15px;
    }

    .room p{
        line-height: 5px;
        position: relative;
    }

    .room h4{
        position: relative;
    }

    ul li{
        cursor: pointer;
    }

    .status{
        font-size: 7px;
    }

    .count{
        position: absolute;
        top: 0;
        left: 0;
        width: 25%;
        height: auto;
        margin-left: 5%;
        color: white;
    }
</style>