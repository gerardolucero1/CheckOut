<template>
    <div class="row" style="height: 79vh;">
        <div class="col-8">
            <b-card no-body
                footer-bg-variant="light"
                footer-border-variant="dark"
                class="h-100"
                style="border: none;"
            >
                <b-card-body id="messages-container">
                    <message-conversation-component 
                        v-for="(message, index) in messages" 
                        :key="index"
                        :written-by-me="message.written_by_me"
                        @click.native="createTicket(message)"
                        >
                        {{ message.content }}
                    </message-conversation-component>
                </b-card-body>

                <div slot="footer">
                    <b-form class="my-3 mx-2" @submit.prevent="postMessage()" autocomplete="off">
                        <b-input-group>

                            <b-form-input type="text" v-model="newMessage"></b-form-input>

                            <b-input-group-append>
                            <b-button type="submit" variant="primary">SEND</b-button>
                            </b-input-group-append>
                        </b-input-group>
                    </b-form>
                </div>
            </b-card>
        </div>
        <div class="col-4 d-flex flex-column justify-content-start align-items-center">
            <img src="https://ae01.alicdn.com/kf/HTB16BWRNXXXXXaCXVXXq6xXFXXXS/Suministros-de-Hotel-restaurante-camarera-uniformes-mujeres-uniforme-trabajo-camisa-hotel-uniforme-hospital-trabajadores-uniforme-AA1359.jpg" width="50%" class="rounded-circle d-block mt-1" alt="...">
            <p>{{ contactName }}</p>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="ticketOptions" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <ul class="list-group text-center">
                            <li class="list-group-item">Action number 1</li>
                            <li class="list-group-item">Action number 2</li>
                            <li class="list-group-item">Action number 3</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        contactId: Number,
        contactName: String,
        messages: Array,
    },
    data(){
        return{
            newMessage: '',
        }
    },
    mounted(){

    },
    updated(){
       this.scrollToBottom() 
    },
    methods: {
        postMessage(){
            let URL = '/api/messages'

            const params = {
                to_id: this.contactId,
                content: this.newMessage,
            }

            axios.post(URL, params).then((response) => {
                this.newMessage = ''
                const message = response.data.message
                message.written_by_me = true
                this.$emit('messageCreated', message)
            })
        },

        scrollToBottom(){
            const scroll = document.querySelector('#messages-container')
            scroll.scrollTop = scroll.scrollHeight
        },

        createTicket(message){
            $('#ticketOptions').modal('show')
            console.log(message)
        }
    },
}
</script>

<style scoped>
    #messages-container{
        max-height: 68vh;
        overflow-y: auto;
        padding: 10px;
        margin: 0;
    }
    #messages-container::-webkit-scrollbar {
        display: none;
    }

    .modal-body{
        padding: 0;
    }

    .modal-content{
        -webkit-border-radius: 70px !important;
        -moz-border-radius: 70px !important;
        border-radius: 70px !important; 
    }

    .list-group{
        -webkit-border-radius: 70px !important;
        -moz-border-radius: 70px !important;
        border-radius: 70px !important; 
    }
</style>