<template>
    <div class="information-product-component mt-4">
        <vue-picture-swipe class="py-4" :items="items"></vue-picture-swipe>
        <v-card elevation="1" rounded>
            <v-container>
                <v-simple-table>
                    <template v-slot:default>
                        <tbody>
                        <tr
                            v-for="item in desserts"
                            :key="item.name"
                        >
                            <td class="grey--text">{{ item.name }}</td>
                            <td>{{ item.calories }}</td>
                        </tr>
                        </tbody>
                    </template>
                </v-simple-table>
            </v-container>
        </v-card>

        <head-information-product icon="mdi mdi-account" title="Contact" />

        <div class="contact mt-3">
            <v-card>
                <v-container>
                    <v-list>
                        <v-list-item @click="()=>{}">
                    <v-row>
                        <v-col cols="2">
                                    <v-icon>mdi mdi-account</v-icon>
                        </v-col>
                        <v-col cols="10">
                            <span>Elhousseyn</span>
                        </v-col>
                    </v-row>
                        </v-list-item>

                        <v-list-item @click="()=>{}">
                            <v-row>
                                <v-col cols="2">
                                    <v-icon>mdi mdi-phone</v-icon>
                                </v-col>
                                <v-col cols="10">
                                    <span>0699687499</span>
                                </v-col>
                            </v-row>
                        </v-list-item>
                    </v-list>
                </v-container>
            </v-card>
        </div>

        <head-information-product icon="mdi mdi-forum" title="Ask Question" />

        <v-card class="ask-question mt-3">
            <v-container>
                <v-textarea
                    class="py-0"
                    name="input-7-1"
                    filled
                    placeholder="How much ? "
                    auto-grow
                    rounded
                    dense
                    rows="4"
                    counter="255"
                >
                    <template v-slot:append>
                        <v-btn class="mt-15 send-button-textarea" dense rounded elevation="0" style="background-color: transparent;">
                            <v-icon class="primary--text">mdi-send</v-icon>
                        </v-btn>
                    </template>
                </v-textarea>
            </v-container>
            <v-alert class="ma-0 rounded-0 v-alert--text">
                    <div class="no-question">
                        <h2 class="text-h6 text-center">No questions !</h2>
                    </div>
            </v-alert>
        </v-card>

        <head-information-product icon="mdi mdi-shopping" title="Simillar products" />

        <div class="simillar-products mt-3">
            <v-row>
                <v-col v-for="(item,index) in 44 " :key="index" cols="3">
                    <product-card-component />
                </v-col>
            </v-row>
        </div>

    </div>
</template>

<style>
.gallery-thumbnail[data-v-9f16f656]{
    display: inline-block !important;
}
.send-button-textarea{
    position: relative;
    left: 18px;
}
</style>

<script>
import VuePictureSwipe from 'vue-picture-swipe'
import HeadInformationProduct from './HeadInformationProduct'
import ProductCardComponent from "./ProductCardComponent";
export default {
    data() {
        return {
            items: [{
                src: 'http://via.placeholder.com/600x400',
                thumbnail: 'http://via.placeholder.com/200x200',
                w: 600,
                h: 400
            },
                {
                    src: 'http://via.placeholder.com/1200x900',
                    thumbnail: 'http://via.placeholder.com/200x200',
                    w: 1200,
                    h: 900
                },
                {
                    src: 'http://via.placeholder.com/1200x900',
                    thumbnail: 'http://via.placeholder.com/200x200',
                    w: 1200,
                    h: 900
                },
                {
                    src: 'http://via.placeholder.com/1200x900',
                    thumbnail: 'http://via.placeholder.com/200x200',
                    w: 1200,
                    h: 900
                },
                {
                    src: 'http://via.placeholder.com/1200x900',
                    thumbnail: 'http://via.placeholder.com/200x200',
                    w: 1200,
                    h: 900
                },
                {
                    src: 'http://via.placeholder.com/1200x900',
                    thumbnail: 'http://via.placeholder.com/200x200',
                    w: 1200,
                    h: 900
                }
            ],
            desserts: [
                {
                    name: 'Frozen Yogurt',
                    calories: 159,
                },
                {
                    name: 'Ice cream sandwich',
                    calories: 237,
                },
                {
                    name: 'Eclair',
                    calories: 262,
                },
                {
                    name: 'Cupcake',
                    calories: 305,
                },
                {
                    name: 'Gingerbread',
                    calories: 356,
                },
                {
                    name: 'Jelly bean',
                    calories: 375,
                },
                {
                    name: 'Lollipop',
                    calories: 392,
                },
                {
                    name: 'Honeycomb',
                    calories: 408,
                },
                {
                    name: 'Donut',
                    calories: 452,
                },
                {
                    name: 'KitKat',
                    calories: 518,
                },
            ],
        };
    },
    components : {
        ProductCardComponent,
        HeadInformationProduct,
         VuePictureSwipe
    }
}
</script>
