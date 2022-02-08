<template>
    <div style="background:white;" class="main mb-60">
        <v-container class="mb-60">
            <v-row>
                <v-col cols="3">
                    <v-card flat>
                        <v-list dense style="box-shadow: 0 4px 16px rgb(43 52 69 / 10%);">
                            <v-menu
                                v-model="menu"
                                :min-width="600"
                                offset-x
                            >
                                <template v-slot:activator="{ on, attrs }">
                                    <v-hover
                                        v-slot="{ hover }"
                                        open-delay="200"
                                    >
                                        <v-list-item  v-bind="attrs" v-on="on" :class="{ 'on-hover': hover }" link>
                                            <v-list-item-icon>
                                                <v-icon>mdi-car-outline</v-icon>
                                            </v-list-item-icon>
                                            <v-list-item-content>
                                                <v-list-item-title>cars</v-list-item-title>
                                            </v-list-item-content>
                                            <v-list-item-action><v-icon>mdi-chevron-right</v-icon></v-list-item-action>
                                        </v-list-item>
                                    </v-hover>
                                </template>

                                <v-card>
                                    <v-list>
                                        <v-list-item>
                                            <v-list-item-avatar>
                                                <img
                                                    src="https://cdn.vuetifyjs.com/images/john.jpg"
                                                    alt="John"
                                                >
                                            </v-list-item-avatar>

                                            <v-list-item-content>
                                                <v-list-item-title>John Leider</v-list-item-title>
                                                <v-list-item-subtitle>Founder of Vuetify</v-list-item-subtitle>
                                            </v-list-item-content>
                                        </v-list-item>
                                    </v-list>
                                </v-card>
                            </v-menu>
                        </v-list>
                    </v-card>
                </v-col>

                <v-col cols="9">
                    <v-card
                        flat
                        tile
                    >
                        <v-window
                            v-model="onboarding"
                            reverse
                        >
                            <v-window-item
                                v-for="n in length"
                                :key="`card-${n}`"
                            >
                                <v-card
                                    color="grey"
                                    height="200"
                                >
                                    <v-row
                                        class="fill-height"
                                        align="center"
                                        justify="center"
                                    >
                                        <h1
                                            style="font-size: 5rem;"
                                            class="white--text"
                                        >
                                            Slide {{ n }}
                                        </h1>
                                    </v-row>
                                </v-card>
                            </v-window-item>
                        </v-window>

                        <v-card-actions class="justify-content-center">
                            <v-item-group
                                v-model="onboarding"
                                class="text-center"
                                mandatory
                            >
                                <v-item
                                    v-for="n in length"
                                    :key="`btn-${n}`"
                                    v-slot="{ active, toggle }"
                                >
                                    <v-btn
                                        :input-value="active"
                                        icon
                                        @click="toggle"
                                    >
                                        <v-icon>mdi-record</v-icon>
                                    </v-btn>
                                </v-item>
                            </v-item-group>
                        </v-card-actions>
                    </v-card>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
export default {
    data: () => ({
        menu : false,
        selectedItem: 1,
        length: 3,
        onboarding: 0
    }),
    methods: {
        next() {
            this.onboarding = this.onboarding + 1 === this.length
                ? 0
                : this.onboarding + 1
        },
        prev() {
            this.onboarding = this.onboarding - 1 < 0
                ? this.length - 1
                : this.onboarding - 1
        },
    }
}
</script>
