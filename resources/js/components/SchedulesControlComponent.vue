<template>
    <section>
        <div class="card m-b-30">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Period:</label>
                        <p>10-28-2019 to 11-03-2019</p>
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="button" class="btn btn-rounded btn-success"><i class="fa fa-calendar mr-2"></i> Make schedule</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card m-b-30">
            <div class="card-body table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Sunday</th>
                            <th scope="col">Monday</th>
                            <th scope="col">Tuesday</th>
                            <th scope="col">Wednesday</th>
                            <th scope="col">Thursday</th>
                            <th scope="col">Friday</th>
                            <th scope="col">Saturday</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Requested Shifts</th>
                            <td>11-08-2019</td>
                            <td>11-09-2019</td>
                            <td>11-10-2019</td>
                            <td>11-11-2019</td>
                            <td>11-12-2019</td>
                            <td>11-13-2019</td>
                            <td>11-12-2019</td>
                        </tr>
                        <tr v-for="(user, index) in users" :key="index">
                            <th scope="row">{{ user.name }}</th>
                            <td v-for="(item, index) in 7" :key="index">
                                <select name="" id="" width="100%" style="font-size:12px">
                                    <option value="">--</option>
                                    <option value="">Housekeeper</option>
                                    <option value="">Laundry</option>
                                    <option value="">Houseman</option>
                                    <option value="">Dishwasher</option>
                                    <option value="">Supervisor</option>
                                    <option value="">R-OFF</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>     
    </section> 
</template>

<script>
export default {
    data(){
        return{
            users: [],
        }
    },
    created() {
        this.getUsers();
    },
    methods: {
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
    }
}
</script>

<style>

</style>