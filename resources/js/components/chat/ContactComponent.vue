<template>
    <li class="list-group-item">
        <div class="row">
            <div class="col-12 col-md-3 align-self-center">
                <img src="https://ae01.alicdn.com/kf/HTB1K.DYLFXXXXc.XpXXq6xXFXXXp/Hotel-uniforme-de-verano-femenino-del-Hotel-limpieza-ropa-trabajo-de-camarero-de-limpieza-personal-con.jpg" width="100%" class="rounded-circle float-left" alt="...">
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