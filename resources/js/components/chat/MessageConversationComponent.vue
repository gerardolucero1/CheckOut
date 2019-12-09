<template>
    <!-- <b-media :right-align="writtenByMe" class="mb-4">
        <template v-slot:aside>
            <b-img blank rounded="circle" blank-color="#ccc" width="48" alt="placeholder"></b-img>
        </template>

        <p class="mb-0">
            <b-card no-body class="p-3 small">
                <slot></slot>
            </b-card>
        </p>

      <b-media v-if="activeMessage">
        <p class="mb-0">
            <b-list-group class="action">
                <b-list-group-item class="actions">Action 1</b-list-group-item>
                <b-list-group-item class="actions">Action 2</b-list-group-item>
                <b-list-group-item class="actions">Action 2</b-list-group-item>
            </b-list-group>
        </p> 
      </b-media>
    </b-media> -->
    <b-media :right-align="writtenByMe" vertical-align="center" class="mb-4">
        <template v-slot:aside>
            <b-img v-if="writtenByMe" src="https://ae01.alicdn.com/kf/HTB16BWRNXXXXXaCXVXXq6xXFXXXS/Suministros-de-Hotel-restaurante-camarera-uniformes-mujeres-uniforme-trabajo-camisa-hotel-uniforme-hospital-trabajadores-uniforme-AA1359.jpg" rounded="circle" blank-color="#ccc" width="48" alt="placeholder"></b-img>
            <b-img v-else src="https://ae01.alicdn.com/kf/HTB1RgxuQFXXXXaWXFXXq6xXFXXXQ/Uniformes-de-limpieza-para-mujeres-uniforme-de-hotel-restaurante-camarera-uniformes-NN0010.jpg" rounded="circle" blank-color="#ccc" width="48" alt="placeholder"></b-img>
        </template>
        <p class="mb-0">
            <b-card :class="{'ticket':tipo==1, 'requerimento':tipo==2} " no-body class="p-3 small">
                <p v-if="tipo==1" style="font-weight:bold">*Support ticket:</p>
                <p v-if="tipo==2" style="font-weight:bold">*Requirement:</p>
                <p v-if="tipo==1 || tipo==2" >Descripción:</p>
                <slot style="color:black">
                    
                </slot>
                <p v-if="tipo==1" style="font-size:11px; font-style:italic; padding-top:5px;">Created on December 6, 2019</p>
            </b-card>
        </p>
    </b-media>
</template>

<script>
export default {
    props: {
        writtenByMe: Boolean,
        tipo: Boolean,
    },
    data(){
        return{
            content: 'HOla Mundo'
        }
    }
}
</script>

<style scoped>
    .action{
        font-size: 10px;
        text-align: center;
    }

    .action .actions{
        padding: 5px;
    }
    .ticket{
        background: #FFFDC8;
        border-radius: 0;
        -webkit-box-shadow: 3px 4px 5px 0px rgba(199,199,199,1);
-moz-box-shadow: 3px 4px 5px 0px rgba(199,199,199,1);
box-shadow: 3px 4px 5px 0px rgba(199,199,199,1);
    }
    .requerimento{
        background: #C8E8FF;
        border-radius: 0;
        -webkit-box-shadow: 3px 4px 5px 0px rgba(199,199,199,1);
-moz-box-shadow: 3px 4px 5px 0px rgba(199,199,199,1);
box-shadow: 3px 4px 5px 0px rgba(199,199,199,1);
    }
</style>