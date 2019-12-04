<template>
    <b-media :right-align="writtenByMe" vertical-align="center" class="mb-4">
        <template v-slot:aside>
            <b-img blank rounded="circle" blank-color="#ccc" width="48" alt="placeholder"></b-img>
        </template>
        <p class="mb-0">
            <b-card no-body class="p-3 small">
                <slot></slot>
            </b-card>
        </p>
    </b-media>
</template>

<script>
export default {
    props: {
        writtenByMe: Boolean,
    },
    data(){
        return{
            content: 'HOla Mundo'
        }
    }
}
</script>

<style>

</style>