<template>
    <div>
      <v-container fluid>
          <v-row>
              <v-col cols="12" xl="10" lg="10" md="10" sm="12">
                  <v-carousel cycle height="250" :show-arrows="false" hide-delimiters>
                      <v-carousel-item v-for="(item,i) in items" :key="i" :src="item.src"></v-carousel-item>
                  </v-carousel>
              </v-col>
              <v-col cols="12" xl="2" lg="2" md="2" sm="12">
                  <v-img
                      lazy-src="https://picsum.photos/id/11/10/6"
                      height="250"
                      width="210"
                      src="https://via.placeholder.com/250/250"
                  ></v-img>
              </v-col>
          </v-row>
      </v-container>
    </div>
</template>

<script>
export default {
    data () {
        return {
            items: [
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg',
                },
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg',
                },
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg',
                },
                {
                    src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg',
                },
            ],
        }
    },
}
</script>
