<template>
    <section class="row">
        <div class="col-md-12 text-right">
            <button class="btn btn-success" data-toggle="modal" data-target="#addProduct">
                Add Products
            </button>
        </div>
        <div class="col-md-12 mt-3">
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
                            <button @click="editAmount(item)" type="button" class="btn btn-round btn-warning"><i class="mdi mdi-plus"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                            <tr v-for="(item, index) in newInventory" :key="index">
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        props: {
            products: {
                type: Array,
                required: true,
            },
            subinventory: {
                type: Object,
                required: true,
            }
        },
        data(){
            return{
                newInventory: [],
                inventory: [],
                product: {},
            }
        },
        mounted(){
            this.inventory = this.subinventory.products
            let productos = []
            let inventario = []

            this.products.forEach((element, index) => {
                this.inventory.forEach((item) => {
                    if(element.id == item.inventory_id){
                        let prod = {
                            inv_id: item.id,
                            id: element.id,
                            name: element.name,
                            brand: element.brand,
                            amount: item.amount,
                            inventory: element.quantityInventory,
                            subInventory_id: item.subInventory_id,
                        }
                        productos.push(prod)
                    }
                })
            })
            this.inventory = []
            this.inventory = productos

            this.products.forEach((element) => {
                if(!this.inventory.some((item) => {
                    return element.id == item.id
                })){
                    inventario.push(element)
                }
            })

            this.newInventory = inventario
        },
        methods: {
            async addProduct(item, index){

                let URL = '/sub-inventories/save'
                let prod = {
                    subInventory_id: this.subinventory.id,
                    inventory_id: item.id,
                    amount: 0,
                }
                try{
                    const response = await axios.post(URL, prod)
                    if(response){
                        this.product = {
                            inv_id: response.data.id,
                            id: item.id,
                            name: item.name,
                            brand: item.brand,
                            inventory: item.quantityInventory
                        }

                        this.product.amount = 0
                        this.product.subInventory_id = this.subinventory.id 
                        this.product.inventory = (this.product.inventory - 0)

                        this.inventory.push(this.product)
                        this.newInventory.splice(index, 1)
                    }
                }
                catch(error){

                }
                finally{
                    
                }

            },

            editAmount(item){
                Swal.fire({
                    title: "An input!",
                    text: "Write something interesting:",
                    input: 'text',
                    showCancelButton: true        
                }).then((result) => {
                    if (result.value <= item.inventory) {
                        item.amount = result.value
                        item.inventory = (item.inventory - result.value)

                        let URL = '/sub-inventories/edit/amount/' + item.inv_id

                        axios.put(URL, {
                            'amount': result.value
                        }).then((response) => {

                        })
                    }else{
                        Swal.fire(
                            'Error',
                            'The amount is greater.',
                            'error'
                        )
                    }
                });
            }
        }
    }
</script>
