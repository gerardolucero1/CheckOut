<template>
    <section>
        
    </section>
</template>

<script>
export default {
    props: {
        userId: Number,
    },
    data(){
        return{

        }
    },
    mounted(){
        Echo.private('App.User.' + this.userId)
            .notification((notification) => {
                console.log(notification);
                toastr.success('You have a new ticket!')
            });
        
    },
    methods: {
        sendNotification(){
            
        }
    }
}
</script>

<style>

</style>