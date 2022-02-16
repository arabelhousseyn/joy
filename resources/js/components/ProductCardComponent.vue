<template>
    <div class="product-card">
        <v-card elevation="1" class="crd">
            <div class="eyes d-flex flex-column p-absolute right-0 z-1 mr-2 mt-1">
                <v-tooltip bottom>
                    <template v-slot:activator="{ on, attrs }">
              <v-btn  @click="dialog = true" v-bind="attrs" v-on="on" notranslate right fab small elevation="0" color="transparent"><v-icon color="secondary">mdi mdi-eye</v-icon> </v-btn>
                    </template>
                    <span>Details</span>
                </v-tooltip>
                <v-tooltip bottom>
                    <template v-slot:activator="{ on, attrs }">
                <v-btn v-bind="attrs" v-on="on" notranslate right fab small elevation="0" color="transparent"><v-icon color="secondary">mdi mdi-cart</v-icon> </v-btn>
                    </template>
                    <span>Cart</span>
                </v-tooltip>
                <v-tooltip bottom>
                    <template v-slot:activator="{ on, attrs }">
                <v-btn v-bind="attrs" v-on="on" notranslate right fab small elevation="0" color="transparent"><v-icon color="secondary">mdi mdi-heart-outline</v-icon> </v-btn>
                    </template>
                    <span>Favorits</span>
                </v-tooltip>
            </div>
            <v-img
                class="py-0"
                aspect-ratio="1"
                height="200"
                lazy-src="https://picsum.photos/id/11/10/6"
                src="https://picsum.photos/id/11/500/200"
            ></v-img>
            <v-card-text class="d-flex justify-content-between align-end">
                <div class="flex-grow-1 my-3">
                    <router-link style="text-decoration: none;" to="/">
                        <h6 class="mb-0 grey--text text--darken-4">T-shirt 1600 sm</h6>
                    </router-link>
                    <div class="d-flex mb-1">
                        <v-rating readonly dense v-model="value" small half-increments ></v-rating>
                        <div class="grey--text ml-1">3.5</div>
                    </div>
                    <h6 class="primary--text mr-2 mb-0">300 DZD</h6>
                </div>
            </v-card-text>
        </v-card>
        <v-dialog
            v-model="dialog"
            width="600"
        >
            <v-card>
                <v-card-title>
                    <v-btn @click="dialog = false" right fab color="transparent" elevation="0" small class="mt-4 v-btn v-btn--absolute v-btn--icon secondary--text v-btn--right"><v-icon>mdi mdi-close</v-icon></v-btn>
                </v-card-title>

                <v-card-text class="mt-4">
                    <v-row>
                        <v-col cols="6">
                            <v-img
                                height="250"
                                lazy-src="https://picsum.photos/id/11/10/6"
                                src="https://picsum.photos/id/11/500/200"
                            ></v-img>
                        </v-col>
                        <v-col cols="6">
                            <h1 style="font-size: 30px;" class="mt-4 mb-4 leading-tight">T-shirt 1600 sm</h1>
                            <h5 style="font-size: 14px;" class="grey--text text--darken-5 mb-3">Published by : <span class="grey--text text--darken-1 font-weight-medium ml-2">Elhousseyn</span></h5>
                            <h5 style="font-size: 14px;" class="grey--text text--darken-5 mb-3">Description : <span class="grey--text text--darken-1 font-weight-medium ml-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</span></h5>
                            <div class="d-flex flex-row mb-3">
                                <h5 style="font-size: 14px;" class="grey--text text--darken-5 mb-3">Rating : </h5>
                                <div class="d-flex mb-1">
                                    <v-rating readonly dense v-model="value" small half-increments ></v-rating>
                                    <div class="grey--text text--darken-1 font-weight-bold ml-1">(50)</div>
                                </div>
                            </div>
                            <h2 style="font-size: 25px;" class="font-weight-bold primary--text mb-2">300 DZD</h2>
                        </v-col>
                    </v-row>
                </v-card-text>
            </v-card>
        </v-dialog>
    </div>
</template>

<style>

.eyes{
    position: absolute;
    z-index: 100;
    transition: 1s ease-in-out;
}
.crd:hover{
    transform: scale(1.02);
    transition: 0.3s ease-in-out;
}
.crd{
    transition: 0.3s ease-in-out;
}
</style>
<script>
export default {
    data : () => {
        return{
            value : 3.5,
            dialog : false,
        }
    },
}
</script>
