<template>
    <div class="row">
        <!-- End XP Col -->
        <div class="col-4">
            <contact-list-component @conversationSelected="changeActiveConversation($event)"
                :conversations="conversations"
                >
            </contact-list-component>
        </div>
        <div class="col-8">
            <active-conversation-component v-if="selectedConversation"
                :contact-id="selectedConversation.contact_id"
                :contact-name="selectedConversation.contact_name"
                :messages="messages"
                @messageCreated="addMessage($event)">

            </active-conversation-component>
        </div>
        <!-- End XP Col -->
    </div>
</template>

<script>
export default {
    props: {
        userId: Number,
    },
    data(){
        return{
            selectedConversation: null,
            messages: [],
            conversations: [],
        }
    },
    mounted(){
        this.getConversations()

        Echo.channel('users.' + this.userId)
            .listen('MessageSent', (data) => {
                const message = data.message
                message.written_by_me = false
                this.addMessage(message)
            });
    },
    methods: {
        getConversations(){
            let URL = '/api/conversations'

            axios.get(URL).then((response) => {
                this.conversations = response.data
            })
        },

        changeActiveConversation(conversation){
            this.selectedConversation = conversation
            this.getMessages()
        },

        getMessages(){
            let URL = `/api/messages?contact_id=${this.selectedConversation.contact_id}`
            axios.get(URL).then((response) => {
                this.messages = response.data
            })
        },

        addMessage(message){
            Push.create('Hello World!')
            let conversation = this.conversations.find((element) => {
                return element.contact_id == message.from_id || element.contact_id == message.to_id;
            })
            let author = this.userId === message.from_id ? 'You' : conversation.contact_name
            conversation.last_message = `${author}:${message.content}`
            conversation.last_time = message.created_atç

            if(this.selectedConversation.contact_id == message.from_id || this.selectedConversation.contact_id == message.to_id){
                this.messages.push(message)
            }
        }

    }
}
</script>