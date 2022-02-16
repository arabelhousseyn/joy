<template>
        <v-container fluid>
            <v-main>
                <top-brand-component />
                <MainProductsComponent />
            </v-main>
        </v-container>
</template>
<script>

import TopBrandComponent from "./TopBrandComponent";
import MainProductsComponent from "./web/MainProductsComponent";
export default {
    components: {MainProductsComponent, TopBrandComponent}
}
</script>
