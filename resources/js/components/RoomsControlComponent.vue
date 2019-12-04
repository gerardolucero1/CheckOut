<template>
    <section class="">
        <div class="row">
            <div class="col-md-3">
                <h4>Type of room</h4>
                <ul class="list-group" style="margin-top: 20px;">
                    <li class="list-group-item" @click="typeRoom = 'all'">All</li>
                    <li class="list-group-item" @click="typeRoom = 'sencilla'">Sencilla</li>
                    <li class="list-group-item" @click="typeRoom = 'doble'">Doble</li>
                    <li class="list-group-item" @click="typeRoom = 'matrimonial'">Matrimonial</li>
                </ul>
            </div>
            <div class="col-md-9">
                <h4>All rooms</h4>
                <div class="row" v-for="(floor, index) in filterRooms" :key="index">
                    <div class="col-md-12" style="margin-top: 10px;">
                        <h6>{{ floor.name }}</h6>
                    </div>
                    <div class="col-md-3" v-for="(room, index) in floor.rooms_floor" :key="index" @click="changeStatus(room)">
                        <div class="card m-b-30 room" :class="{ 'bg-success-gradient': room.status == isVacancy, 'bg-danger-gradient': room.status == isCheckOut, 'bg-warning-gradient': room.status == isStayOver, 'bg-primary-gradient': room.status == isPendingReview }">
                            <div class="card-body">
                                <div class="xp-widget-box text-white text-center pt-3">
                                    <p class="xp-icon-timer mb-4">{{ room.id }}</p>
                                    <h4 class="mb-2 font-20">{{ room.name }}</h4>
                                    <p class="mb-3">{{ room.type }}</p>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="room" :class="{ 'bg-success-gradient': room.status == isVacancy, 'bg-danger-gradient': room.status == isCheckOut, 'bg-warning-gradient': room.status == isStayOver, 'bg-primary-gradient': room.status == isPendingReview }">
                            <p>{{ room.name }}</p>
                            <p>{{ room.type }}</p>
                        </div> -->
                        <!-- <div class="status d-flex justify-content-center align-items-center">
                            <label for="">
                                <input type="radio" name="status">Check Out
                            </label>
                            <label for="">
                                <input type="radio" name="status">Stay Over
                            </label>
                            <label for="">
                                <input type="radio" name="status">Vacany
                            </label>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data(){
        return{
            floors: [],
            typeRoom: 'all',
            isVacancy: 'Vacancy',
            isCheckOut: 'Check Out',
            isStayOver: 'Stay Over',
            isPendingReview: 'Pending Review',
        }
    },
    created(){
        this.getFloors()
    },
    computed: {
        filterRooms(){
            if(this.typeRoom == 'all'){
                return this.floors
            }

            let newArray = []
            for (let i = 0; i < this.floors.length; i++) {
                let floor = JSON.parse( JSON.stringify( this.floors[i] ) );
                let rooms = floor.rooms_floor.filter(item => item.type == this.typeRoom)
                floor.rooms_floor = JSON.parse( JSON.stringify( rooms ) );
                newArray.push(floor)
            }
            console.log(newArray)

            return newArray
        }
    },
    methods: {
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
            
                default:
                    break;
            }
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
        }
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

    .vacancy{
        background-color: green;
    }

    .check-out{
        background-color: red;
    }

    .stay-over{
        background-color: orange;
    }

    .pending-review{
        background-color: blue;
    }
</style>