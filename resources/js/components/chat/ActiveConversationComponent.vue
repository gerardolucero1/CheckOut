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
        <div class="col-4 d-flex flex-column justify-content-center align-items-center">
            <img src="https://pbs.twimg.com/profile_images/1116880149679443968/_fRD2-bj_400x400.jpg" width="50%" class="rounded-circle d-block mt-1" alt="...">
            <p>{{ contactName }}</p>
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
        }
    },
}
</script>

<style>
    #messages-container{
        max-height: 68vh;
        overflow-y: auto;
        padding: 10px;
        margin: 0;
    }
    #messages-container::-webkit-scrollbar {
        display: none;
    }
</style>