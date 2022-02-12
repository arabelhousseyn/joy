<template>
    <v-card elevation="0" color="#ffffff00">
        <div class="px-3 px-md-10 py-8 ">
            <h3 class="mb-3 text-center">Signin</h3>
            <h5 class="font-600 grey--text text--darken-3 text-sm mb-9 text-center">Log in with phone & password</h5>
            <form @submit.prevent="login" method="post">
                <p class="text-14 mb-1">Phone *</p>
                <v-text-field
                    placeholder="Phone *"
                    outlined
                    dense
                    color="#3665f3"
                ></v-text-field>

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
                <v-btn type="submit" block color="#ff9900">
                    <span style="color:white;">Login</span>
                </v-btn>
            </form>
            <div class="d-flex align-center my-1">
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
        <div class="py-4 lighten-2">
            <div class="text-center">
                Forgot Your Password <a class="ms-2" style="text-decoration:underline;" href="/reset">Reset It</a>
            </div>
        </div>
    </v-card>
</template>

<script>
export default {
    data : () => {
        return{
            show1 : false,
        }
    },
    methods : {
        login()
        {

        }
    }
}
</script>
