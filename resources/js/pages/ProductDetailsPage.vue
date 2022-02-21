<template>
    <div class="product-details-component">
        <v-container fluid>
            <bread-crumbs-product />
            <title-product-component />
        </v-container>
    </div>
</template>
<script>
import BreadCrumbsProduct from "../components/BreadCrumbsProductComponent";
import TitleProductComponent from "../components/TitleProductComponent";
export default {
    components: {TitleProductComponent, BreadCrumbsProduct}
}
</script>
