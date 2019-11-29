<template>
    <section class="row">
        <div class="col-md-6">
            <h4>List of products registered</h4>
            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Cost</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in products" :key="index">
                        <th>{{ item.id }}</th>
                        <td>{{ item.name }}</td>
                        <td>{{ item.brand }}</td>
                        <td>{{ item.cost }}</td>
                        <td>{{ item.quantityInventory }}</td>
                        <td>
                            <button @click="addProduct(item, index)" type="button" class="btn btn-round btn-warning"><i class="mdi mdi-plus"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <h4>Products in your sub-inventory</h4>
            <table class="table table-hover mt-3">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Inventory</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(item, index) in inventory" :key="index">
                        <th>{{ item.id }}</th>
                        <td>{{ item.name }}</td>
                        <td>{{ item.brand }}</td>
                        <td>{{ item.amount }}</td>
                        <td>{{ item.inventory }}</td>
                        <td>
                            <button @click="addProduct(item)" type="button" class="btn btn-round btn-warning"><i class="mdi mdi-plus"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <button type="button" @click="saveInventory()" class="btn btn-round btn-success"><i class="mdi mdi-upload"></i></button>
        </div>
    </section>
</template>

<script>
    export default {
        props: [
            'products'
        ],
        data(){
            return{
                inventory: [],
                product: {},
            }
        },
        methods: {
            addProduct(item, index){
                this.product = {
                    id: item.id,
                    name: item.name,
                    brand: item.brand,
                    inventory: item.quantityInventory
                }

                Swal.fire({
                    title: "An input!",
                    text: "Write something interesting:",
                    input: 'text',
                    showCancelButton: true        
                }).then((result) => {
                    if (result.value <= item.quantityInventory) {
                        this.product.amount = result.value 
                        this.product.inventory = (this.product.inventory - result.value )

                        this.inventory.push(this.product)
                        this.products.splice(index, 1)
                    }else{
                        Swal.fire(
                            'Error',
                            'The amount is greater.',
                            'error'
                        )
                    }
                });
            },

            async saveInventory(){
                let URL = '/sub-inventories/save'

                try{
                    const response = await axios.post(URL, this.inventory)
                    if(response){
                        Swal.fire(
                            'Good job!',
                            'Inventory stored!',
                            'success'
                        )
                    }
                }
                catch(error){

                }
            }
        }
    }
</script>
