<template>
    <div id="appbar">
        <v-toolbar style="box-shadow: 0 4px 16px rgb(43 52 69 / 10%) !important;" color="white" flat>
            <div class="container py-0 fill-height">
                <v-toolbar-title>Joy</v-toolbar-title>
                <v-spacer></v-spacer>
                <v-text-field
                    placeholder="Search"
                    outlined
                    rounded
                    dense
                    hide-details
                    prepend-inner-icon="mdi-magnify"
                ></v-text-field>
                <v-spacer></v-spacer>
                <v-btn class="mr-2 button-color" icon>
                    <v-icon>mdi-account</v-icon>
                </v-btn>
                <v-badge offset-x="20" offset-y="20" color="error" content="2">
                    <v-btn @click.stop="drawer = !drawer" class="button-color" icon>
                        <v-icon>mdi-cart</v-icon>
                    </v-btn>
                </v-badge>
            </div>
        </v-toolbar>

        <v-navigation-drawer v-model="drawer" absolute bottom temporary right>
            <v-list-item>
                <v-list-item-content>
                    <v-list-item-title><v-icon>mdi-cart</v-icon> 0 Items</v-list-item-title>
                </v-list-item-content>
                <v-list-item-action>
                    <v-btn @click.stop="drawer = !drawer"  icon>
                        <v-icon>mdi-close</v-icon>
                    </v-btn>
                </v-list-item-action>
            </v-list-item>
            <v-divider></v-divider>
            <div style="height:80vh;" class="d-flex flex-column justify-center align-center mt-10">
                <img class="v-avatar mb-8 rounded-0" src="https://bonik-nuxt.vercel.app/_nuxt/img/empty-cart.0de7f76.png" />
                <p class="grey--text text--darken-2 px-5 mx-10 text-center">Your shopping bag is empty. Start shopping</p>
            </div>
        </v-navigation-drawer>
    </div>
</template>

<script>
export default {
    data: () => ({
        drawer : false,
    }),
}
</script>
