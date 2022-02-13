<template>
    <div v-if="!$store.state.show">
        welcome to reset password
    </div>
</template>

<script>
export default {
    data : ()=>{
        return{

        }
    },
    mounted()
    {
        this.$store.commit('CHECK_URL_RESET')
    }
}
</script>
