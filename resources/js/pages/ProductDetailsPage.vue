<template>
    <div class="product-details-component">
        <v-container fluid>
            <bread-crumbs-product />
            <title-product-component />
            <v-row>
                <v-col lg="10" md="6">
                    <information-product-component />
                </v-col>
                <v-col lg="2" md="6">pub</v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
import BreadCrumbsProduct from "../components/BreadCrumbsProductComponent"
import TitleProductComponent from "../components/TitleProductComponent"
import InformationProductComponent from '../components/InformationProductComponent'
export default {
    components: {TitleProductComponent, BreadCrumbsProduct,InformationProductComponent}
}
</script>
