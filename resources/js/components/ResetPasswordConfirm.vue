<template>
    <div v-if="!$store.state.show" class="reset-password">
        <v-container class="d-flex justify-content-center mt-10">
            <div  class="flex-column" style="width: 700px;">
                <div class="text-center">
                    <h1>logo</h1>
                </div>

                <v-card class="mt-5">
                    <v-card-title class="text-center font-weight-bold text-h5 text-no-wrap" style="color: #3665f3;">Reset password</v-card-title>
                    <v-card-text>
                        <form @submit.prevent="reset" method="get">
                            <v-text-field
                                :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                                :type="show1 ? 'text' : 'password'"
                                placeholder="New password *"
                                counter
                                outlined
                                color="#3665f3"
                                @click:append="show1 = !show1"
                            ></v-text-field>
                                <v-text-field
                                    :append-icon="show2 ? 'mdi-eye' : 'mdi-eye-off'"
                                    :type="show2 ? 'text' : 'password'"
                                    placeholder="Confirm new password *"
                                    counter
                                    outlined
                                    color="#3665f3"
                                    @click:append="show2 = !show2"
                                ></v-text-field>
                            <v-btn type="submit" elevation="0" block color="#ff9900"><span style="color: white;">Reset it!</span></v-btn>
                        </form>
                    </v-card-text>
                </v-card>
            </div>
        </v-container>
    </div>
</template>

<script>
export default {
    data : ()=>{
        return{
            show1 : false,
            show2 : false,
        }
    },
    mounted()
    {
        this.$store.commit('CHECK_URL_RESET')
    }
}
</script>
