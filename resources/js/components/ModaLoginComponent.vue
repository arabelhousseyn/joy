<template>
    <div>
        <v-dialog
            v-model="dialog"
            persistent
            max-width="600px"
        >
            <v-card>
                <div class="px-3 px-md-10 py-8 ">
                    <h3 class="mb-2 text-center">Welcome To Joy</h3>
                    <h5 class="font-600 grey--text text--darken-3 text-sm mb-9 text-center">Log in with email & password</h5>
                </div>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>
export default {
    props : ['dialog'],
    methods : {
        close()
        {
            this.$emit('cs')
        }
    }
}
</script>
