<template>
    <div class="row" style="height: 75vh;">
        <div class="col-8">
            <b-card
                footer-bg-variant="light"
                footer-border-variant="dark"
                class="h-100"
                style="border: none;"
            >
                <message-conversation-component 
                    v-for="(message, index) in messages" 
                    :key="index"
                    :written-by-me="message.written_by_me"
                    >
                    {{ message.content }}
                </message-conversation-component>

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
            <p>Seelected user</p>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            messages: [],
            newMessage: '',
        }
    },
    mounted(){
        this.getMessages()
    },
    methods: {
        getMessages(){
            let URL = '/api/messages'
            axios.get(URL).then((response) => {
                this.messages = response.data
                console.log(response.data)
            })
        },

        postMessage(){
            let URL = '/api/messages'

            const params = {
                to_id: 2,
                content: this.newMessage,
            }

            axios.post(URL, params).then((response) => {
                console.log(response.data)
                this.newMessage = ''
                this.getMessages()
            })
        }
    },
}
</script>

<style>

</style>