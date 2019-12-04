<template>
    <li class="list-group-item">
        <div class="row">
            <div class="col-12 col-md-3 align-self-center">
                <img src="https://pbs.twimg.com/profile_images/1116880149679443968/_fRD2-bj_400x400.jpg" width="100%" class="rounded-circle float-left" alt="...">
            </div>
            <div class="col-6 d-none d-md-block align-self-center">
                <p class="mb-1">{{ conversation.contact_name }}</p>
                <p class="small text-muted">{{ conversation.last_message }}</p>
            </div>
            <div class="col-3 text-right d-none d-md-block">
                <p class="small text-muted">{{ conversation.last_time }}</p>
            </div>
        </div>
    </li>
</template>

<script>
export default {
    props: {
        conversation: Object,
    },
    data(){
        return{
            
        }
    }
}
</script>

<style>

</style>