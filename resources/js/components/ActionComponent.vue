<template>
    <div class="signup">
        <v-container fluid>
            <v-row>
                <v-col cols="12" lg="6" md="6" sm="12">
                    <signin-component />
                </v-col>
                <v-col cols="12" lg="6" md="6" sm="12">
                    <signup-component />
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>

<script>

import SigninComponent from "./SigninComponent";
import SignupComponent from "./SignupComponent";
export default {
    components: {SignupComponent, SigninComponent},
    data : () => {
        return{

        }
    }
}
</script>
