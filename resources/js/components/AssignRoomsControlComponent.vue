<template>
    <section class="">
        <div class="row">
            <div class="col-md-12">
                <h5>Assing rooms</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>Number floors: {{ floors.length }}</p>
                <p>Number rooms: {{ numberRooms }}</p>
            </div>
            <div class="col-md-6 text-right">
                <div class="xp-breadcrumb">
                    <button type="button" class="btn btn-primary item" @click="assignRooms()">
                        Assign rooms
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover" v-if="employees.length != 0">
                    <thead>
                        <tr>
                            <th scope="col">
                                <input type="checkbox" v-model="selectAll">
                            </th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Rooms</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(employee, index) in employees" :key="index">
                            <th scope="row">
                                <input type="checkbox" v-model="selected" :value="employee.id">
                            </th>
                            <td>{{ employee.name }}</td>
                            <td>{{ employee.email }}</td>
                            <td>{{ employee.rooms.length }}</td>
                            <td>
                                <a :href="'/control/rooms/employee/' + employee.id" class="btn btn-rounded btn-primary"><i class="mdi mdi-send mr-2"></i> OPT</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</template>

<script>
import interact from 'interactjs';
export default {
    data(){
        return{
            employees: [],
            selected: [],
            floors: [],
        }
    },
    created(){
        this.getEmployees()
        this.getFloors()
        interact('.item')
            .on('click', (event) => {             

             Swal.fire(
                 'Success!',
                 'This room has been rushed.',
                 'success'
             )
         })  
    },
    computed: {
        numberRooms(){
            let rooms = 0;
            this.floors.forEach((item) => {
                rooms = rooms + item.rooms_floor.length
            })
            return rooms
        },

        selectAll: {
            get: function () {
                return this.employees ? this.selected.length == this.employees.length : false;
            },
            set: function (value) {
                var selected = [];

                if (value) {
                    this.employees.forEach((element) => {
                        selected.push(element.id);
                    });
                }

                this.selected = selected;
            }
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

        async getEmployees(){
            try {
                let URL = '/control/get-employees'

                let response = await axios.get(URL)
                if(response){
                    this.employees = response.data
                    this.employees.forEach((item) => {
                        Object.defineProperty(item, 'select', {
                            enumerable: true,
                            configurable: true,
                            writable: true,
                            value: false,
                        })
                    })

                }
            } catch (e) {
            
            }
            finally{
                
            }
        },

        async assignRooms(){
            try{
                let URL = '/control/assign-rooms/assign'

                let response = await axios.post(URL, this.selected)
                if(response){
                    this.getEmployees()
                }
            }
            catch(e){

            }
        }
    },
}
</script>

<style>

</style>