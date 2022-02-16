<template>
    <div class="mt-4">
        <HeadingTitleComponent title="Products" icon="mdi mdi-cart" />
        <div class="side-filter">
            <v-row>
                <v-col cols="4">
                        <v-list flat color="transparent">
                            <v-list-item-group
                                v-model="model"
                                mandatory
                                color="secondary"
                            >
                                <v-list-item
                                    v-for="(item, i) in items"
                                    :key="i"
                                >
                                    <v-list-item-icon>
                                        <v-icon v-text="item.icon"></v-icon>
                                    </v-list-item-icon>

                                    <v-list-item-content>
                                        <v-list-item-title v-text="item.text"></v-list-item-title>
                                    </v-list-item-content>
                                </v-list-item>
                            </v-list-item-group>
                        </v-list>
                </v-col>
                <v-col cols="8">
                    <div class="head">
                        <v-chip-group>
                            <v-chip label color="transparent">
                                <v-icon small left color="secondary">{{item.icon}}</v-icon> <span style="color: #3665f3;">{{item.text}}</span>
                            </v-chip>
                            <v-spacer></v-spacer>
                            <v-chip label color="transparent">
                                <router-link style="color: #3665f3; text-decoration: none;" to="/">View all</router-link> <v-icon small right color="secondary">mdi mdi-menu-right</v-icon>
                            </v-chip>
                        </v-chip-group>
                    </div>
                    <div class="products">
                        <v-row>
                            <v-col v-for="(item,index) in 48" :key="index" cols="12" lg="4" md="6">
                                <product-card-component />
                            </v-col>
                        </v-row>
                        <div class="d-flex justify-center align-center mt-4">
                            <div class="w-100 my-2">
                                <v-pagination
                                    v-model="page"
                                    :length="6"
                                ></v-pagination>
                            </div>
                        </div>
                    </div>
                </v-col>
            </v-row>
        </div>
    </div>
</template>
<script>
import HeadingTitleComponent from "../HeadingTitleComponent";
import ProductCardComponent from "../ProductCardComponent";
export default {
    data : () =>{
      return{
          model : 0,
          page : 1,
          item : {
              icon: 'mdi-heart-multiple-outline',
              text: 'All',
          },
          items: [
              {
                  icon: 'mdi-heart-multiple-outline',
                  text: 'All',
              },
              {
                  icon: 'mdi-car',
                  text: 'car',
              },
              {
                  icon: 'mdi-tshirt-crew',
                  text: 'clothing',
              },
          ],
      }
    },
    components: {ProductCardComponent, HeadingTitleComponent}
}
</script>
