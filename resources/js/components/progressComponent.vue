<template>
    <div>
        <v-overlay opacity="1" color="white" :value="overlay">
            <v-progress-circular
                color="black"
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
    }
}
</script>
