<template>
    <div>
        <v-overlay opacity="1" color="white" :value="overlay">
            <v-progress-circular
                color="#ff9900"
                indeterminate
                size="64"
            ></v-progress-circular>
        </v-overlay>
    </div>
</template>

<script>
export default {
    data : () => {
        return{
            overlay: false
        }
    },
    created() {
        setTimeout(()=>{
            this.overlay = false
        },5000)
    }
}
</script>
