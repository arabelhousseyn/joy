<template>
    <div >
        <v-app style="background-color: #f5f5f5 !important;">
            <progress-component />
            <div v-if="isWeb" class="web">
                <appbar-component v-if="$store.state.show" />
                <header-component  v-if="$store.state.show1"/>
                <router-view />
                <footer-component v-if="$store.state.show" />
            </div>
            <div v-if="!isWeb" class="mobile">
            </div>
        </v-app>
    </div>
</template>
<script>
import appbarComponent from '../components/web/appbarComponent'
import progressComponent from '../components/progressComponent'
import HeaderComponent from "../components/web/HeaderComponent";
import FooterComponent from "../components/FooterComponent";

export default {
    data : () =>{
      return{
          isWeb : true,
      }
    },
    components : {
        FooterComponent,
        HeaderComponent,
        appbarComponent,
        progressComponent
    },
    created() {
        let device = navigator.userAgent
        if(device.includes('Android'))
        {
            this.isWeb = false
        }
        this.$store.commit('CHECK_URL')
    }
}
</script>
