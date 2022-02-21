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
                            <td>{{ item.name }}</td>
                            <td>{{ item.calories }}</td>
                        </tr>
                        </tbody>
                    </template>
                </v-simple-table>
            </v-container>
        </v-card>

        <div class="title-contact mt-10 d-flex flex-row">
            <v-avatar><v-icon large class="primary--text">mdi mdi-account-circle</v-icon></v-avatar><h2 class="grey--text mt-1"> Contact</h2>
        </div>

        <div class="contact mt-10">
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
    </div>
</template>

<style>
.gallery-thumbnail[data-v-9f16f656]{
    display: inline-block !important;
}
</style>

<script>
import VuePictureSwipe from 'vue-picture-swipe'
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
         VuePictureSwipe
    }
}
</script>
