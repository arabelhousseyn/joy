<template>
    <div class="product-title-component">
        <div class="d-flex justify-space-between full-h">
            <h1 class="text-h5 text-lg-h4 font-weight-light text-capitalize">BMW Série 2 2021 Coupé Pack Sport M</h1>
            <div class="actions">
                <v-tooltip bottom>
                    <template v-slot:activator="{ on, attrs }">
                <v-btn v-bind="attrs" v-on="on" class="mx-4 grey--text" icon>
                    <v-icon size="24px">mdi mdi-heart-outline</v-icon>
                </v-btn>
                    </template>
                    <span>Favorits</span>
                </v-tooltip>

                <v-tooltip bottom>
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn v-bind="attrs" v-on="on" class="mx-4 grey--text" icon>
                            <v-icon size="24px">mdi mdi-cart</v-icon>
                        </v-btn>
                    </template>
                    <span>Cart</span>
                </v-tooltip>


                <v-tooltip bottom>
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn v-bind="attrs" v-on="on" class="mx-4 grey--text" icon>
                            <v-icon size="24px">mdi mdi-flag</v-icon>
                        </v-btn>
                    </template>
                    <span>Report</span>
                </v-tooltip>

                <v-tooltip bottom>
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn v-bind="attrs" v-on="on" class="mx-4 grey--text" icon>
                            <v-icon size="24px">mdi mdi-share-variant</v-icon>
                        </v-btn>
                    </template>
                    <span>Share</span>
                </v-tooltip>
            </div>
        </div>
        <div class="mt-1 d-flex">
            <div class="primary--text text-h6">
                <span>780 millions</span>
                <span>negociable</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data : () =>({
    })
}
</script>
