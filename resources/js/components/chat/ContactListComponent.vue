<template>
    <section>
        <input type="text" class="form-control" placeholder="Search">
        <ul class="list-group list-group-flush mt-1">
            <contact-component 
                v-for="(conversation, index) in conversations" 
                :key="index"
                :conversation="conversation"
                @click.native="selectConversation(conversation)"
                >

            </contact-component>
        </ul>
    </section>
</template>

<script>
export default {
    props: {
        conversations: Array,
    },
    data(){
        return{

        }
    },
    mounted(){
        
    },
    methods: {
        selectConversation(conversation){
            this.$emit('conversationSelected', conversation)
        }
    }
}
</script>

<style>

</style>