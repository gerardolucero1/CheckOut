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
                        :tipo="message.tipo"
                        :id="message.id"
                        :content="message.content"
                        :created="message.created_at"
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
                            <li class="list-group-item"><button class="btn btn-info" @click="crearTicket(message_id)">New Ticket Room: #{{numRoom}}</button></li>
                            <li class="list-group-item"><button class="btn btn-info" @click="crearRequeriment(message_id)">New Requirement Room: #{{numRoom}}</button></li>
                            <li class="list-group-item"><button class="btn btn-info">Marcar como tarea</button></li>
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
            message:[],
            content:'',
            room:[],
            numRoom:'',
            message_id:'',
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

        createTicket(message, key){
            
            $('#ticketOptions').modal('show')
            var regex = /(\d+)/g;
            this.message=message;
            this.message_id=message.id;
            this.content = message.content;
            this.room=this.content.match(regex);
            var ant=0;
            var mayor=0;
            this.numRoom='No se encontraron # de habitacion en el mensaje';

            this.room.forEach( function(a){
               
                if(parseInt(a)>parseInt(ant)){
                ant=a;
                }
            } );
            this.numRoom=ant;
           
                        
           
            
        },
        crearTicket(message_id){
            let URL = '/api/ticket'

            const params = {
                message_id: message_id,
            }

            axios.post(URL, params).then((response) => {
               this.$emit('updateMessages');
               Swal.fire(
  'Success',
  'You created a ticket',
  'success'
);
$('#ticketOptions').modal('hide');
            })
        },

        crearRequeriment(message_id){
            let URL = '/api/requeriment'

            const params = {
                message_id: message_id,
            }

            axios.post(URL, params).then((response) => {
               this.$emit('updateMessages');
               Swal.fire(
  'Success',
  'You created a new requeriment',
  'success'
);
$('#ticketOptions').modal('hide');
            })
        },
        
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