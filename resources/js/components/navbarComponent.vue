<template>
    <div id="appbar">
        <v-toolbar color="white" flat>
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
                <v-btn style="background-color: #e6ecf6;" class="mr-2" icon>
                    <v-icon>mdi-account</v-icon>
                </v-btn>
                <v-badge offset-x="20" offset-y="20" color="error" content="2">
                    <v-btn @click.stop="drawer = !drawer" style="background-color: #e6ecf6;" icon>
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
            </v-list-item>
            <v-divider></v-divider>
            <v-list nav dense>
                <v-list-item-group
                    v-model="group"
                    active-class="deep-purple--text text--accent-4"
                >
                    <v-list-item>
                        <v-list-item-title>Foo</v-list-item-title>
                    </v-list-item>
                </v-list-item-group>
            </v-list>
        </v-navigation-drawer>

    </div>
</template>

<script>
export default {
    data: () => ({
        drawer : false,
        items: ['Foo', 'Bar', 'Fizz', 'Buzz'],
    }),
}
</script>
