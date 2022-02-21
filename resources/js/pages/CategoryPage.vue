<template>
    <div class="category">
        <v-container fluid>
            <title-category-component />
            <breadcrumbs-category-component />
            <v-row class="pt-2">
                <v-col cols="3">
                        <div class="sidebar d-none d-md-block d-lg-block">
                            <affix class="sidebar" relative-element-selector="#products">
                                <v-card>
                                    <v-form class="px-2 py-2">
                                        <v-text-field
                                            append-icon="mdi-magnify"
                                            placeholder="Search"
                                            filled
                                            rounded
                                            dense
                                        ></v-text-field>
                                    </v-form>
                                    <v-list class="px-2 py-2">
                                        <v-select
                                            v-model="value"
                                            :items="items"
                                            attach
                                            chips
                                            placeholder="Provinces"
                                            multiple
                                            solo
                                            hide-details
                                            flat
                                        ></v-select>
                                       <v-divider></v-divider>
                                        <v-select
                                            v-model="value"
                                            :items="items"
                                            attach
                                            chips
                                            placeholder="Provinces"
                                            multiple
                                            solo
                                            hide-details
                                            flat
                                        ></v-select>
                                        <v-divider></v-divider>
                                        <v-select
                                            v-model="value"
                                            :items="items"
                                            attach
                                            chips
                                            placeholder="Provinces"
                                            multiple
                                            solo
                                            hide-details
                                            flat
                                        ></v-select>
                                        <v-divider></v-divider>
                                        <v-select
                                            v-model="value"
                                            :items="items"
                                            attach
                                            chips
                                            placeholder="Provinces"
                                            multiple
                                            solo
                                            hide-details
                                            flat
                                        ></v-select>
                                        <v-divider></v-divider>
                                        <v-select
                                            v-model="value"
                                            :items="items"
                                            attach
                                            chips
                                            placeholder="Provinces"
                                            multiple
                                            solo
                                            hide-details
                                            flat
                                        ></v-select>
                                    </v-list>
                                </v-card>
                            </affix>
                        </div>
                </v-col>
                <v-col cols="9">
                    <div class="products" id="products">
                        <v-row>
                            <v-col v-for="(value,index) in 44" :key="index" cols="12" lg="3" sm="6">
                                <product-card-component />
                            </v-col>
                            <div class="d-flex justify-center align-center mt-4">
                                <div class="w-100 my-2">
                                    <v-pagination
                                        v-model="page"
                                        :length="6"
                                    ></v-pagination>
                                </div>
                            </div>
                        </v-row>
                    </div>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>


<style>
.sidebar {
    width: 368px;
    top: 0px !important;
}
</style>

<script>

import TitleCategoryComponent from "../components/TitleCategoryComponent"
import BreadcrumbsCategoryComponent from "../components/BreadcrumbsCategoryComponent";
import ProductCardComponent from "../components/ProductCardComponent";
export default {
    components: {ProductCardComponent, BreadcrumbsCategoryComponent, TitleCategoryComponent},
    data : () => ({
        page : 1,
        items: ['foo', 'bar', 'fizz', 'buzz'],
        value: [],
    }),
    created() {

    }
}
</script>
