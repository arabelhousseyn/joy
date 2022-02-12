<template>
    <v-card elevation="0" color="#ffffff00">
        <div class="px-3 px-md-10 py-8 ">
            <h3 class="mb-3 text-center">Signup</h3>
            <h5 class="font-600 grey--text text--darken-3 text-sm mb-9 text-center"></h5>
            <form @submit.prevent="signup" method="post">
                <v-row>
                    <v-col cols="12" lg="6" md="6" sm="6">
                        <p class="text-14 mb-1">FirstName *</p>
                        <v-text-field
                            placeholder="FirstName *"
                            outlined
                            dense
                            color="#3665f3"
                        ></v-text-field>
                    </v-col>

                    <v-col cols="12" lg="6" md="6" sm="6">
                        <p class="text-14 mb-1">LastName *</p>
                        <v-text-field
                            placeholder="LastName *"
                            outlined
                            dense
                            color="#3665f3"
                        ></v-text-field>
                    </v-col>

                    <v-col cols="12" lg="6" md="6" sm="6">
                        <p class="text-14 mb-1">Phone *</p>
                        <v-text-field
                            placeholder="Phone *"
                            outlined
                            dense
                            color="#3665f3"
                        ></v-text-field>
                    </v-col>

                    <v-col cols="12" lg="6" md="6" sm="6">
                        <p class="text-14 mb-1">Email</p>
                        <v-text-field
                            type="email"
                            placeholder="Email"
                            outlined
                            dense
                            color="#3665f3"
                        ></v-text-field>
                    </v-col>

                    <v-col cols="12" lg="6" md="6" sm="6">
                        <p class="text-14 mb-1">Password *</p>
                        <v-text-field
                            :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                            :type="show1 ? 'text' : 'password'"
                            placeholder="Password *"
                            counter
                            outlined
                            color="#3665f3"
                            @click:append="show1 = !show1"
                        ></v-text-field>
                        </v-col>
                        <v-col cols="12" lg="6" md="6" sm="6">
                            <p class="text-14 mb-1">Confirm password *</p>
                            <v-text-field
                                :append-icon="show2 ? 'mdi-eye' : 'mdi-eye-off'"
                                :type="show2 ? 'text' : 'password'"
                                placeholder="Confirm password *"
                                counter
                                outlined
                                color="#3665f3"
                                @click:append="show2 = !show2"
                            ></v-text-field>
                    </v-col>

                    <div class="py-2 lighten-2">
                        <p><span style="font-weight: bold;">Note:</span> required fields are marked with *</p>
                    </div>

                    <v-btn type="submit" block color="#ff9900">
                        <span style="color:white;">Signup</span>
                    </v-btn>
                </v-row>
            </form>
            <div class="d-flex align-center my-4">
                <v-divider></v-divider>
                <span class="mx-4">Or</span>
                <v-divider></v-divider>
            </div>
            <v-btn class="mb-4" block color="#4e5fbb">
                <v-icon color="white" left>mdi-facebook</v-icon>
                <span style="color:white;">Continue with facebook</span>
            </v-btn>

            <v-btn block color="#2b81d6">
                <v-icon color="white" left>mdi-google</v-icon>
                <span style="color:white;">Continue with google</span>
            </v-btn>
        </div>
    </v-card>
</template>

<script>
export default {
    data : () => {
        return{
            show1 : false,
            show2 : false,
        }
    },
    methods : {
        signup()
        {
            console.log('clicked')
        }
    }
}
</script>
