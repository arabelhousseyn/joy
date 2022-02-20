<template>
        <div class="top-bar">
            <heading-title-component title="Top brands" icon="mdi mdi-store" />
            <v-slide-group
                v-model="model"
                show-arrows
            >
                <v-slide-item
                    v-for="n in 15"
                    :key="n"
                >
                    <v-card
                        class="ma-4 py-0"
                        width="305"
                        @click="toggle"
                        elevation="0"
                    >
                        <div class="pt-4 px-4 text-center">
                            <h2 class="text-capitalize">title</h2>
                            <h3 class="text-capitalize grey--text" style="font-size: .9rem; font-weight: 300;">description description </h3>
                        </div>
                        <v-img
                            class="py-0"
                            aspect-ratio="1"
                            height="200"
                            lazy-src="https://picsum.photos/id/11/10/6"
                            src="https://picsum.photos/id/11/500/200"
                        >
                            <template v-slot:placeholder>
                                <v-row
                                    class="fill-height ma-0"
                                    align="center"
                                    justify="center"
                                >
                                    <v-progress-circular
                                        indeterminate
                                        color="grey lighten-5"
                                    ></v-progress-circular>
                                </v-row>
                            </template>
                        </v-img>
                        <div class="text-start">
                            <v-chip class="ma-2 transparent theme--light secondary--text">
                                <v-icon small left class="secondary--text">mdi mdi-cart</v-icon> 50 products
                            </v-chip>
                        </div>
                    </v-card>
                </v-slide-item>
            </v-slide-group>
        </div>
</template>

<script>
import HeadingTitleComponent from "./HeadingTitleComponent";
export default {
    components: {HeadingTitleComponent},
    data: () => ({
        model: null,

    }),
    methods : {
        toggle()
        {
            console.log('clicked')
        }
    }
}
</script>
