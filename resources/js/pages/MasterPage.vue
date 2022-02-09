<template>
    <div >
        <v-app style="background-color: #f5f5f5 !important;">
            <div v-if="isWeb" class="web">
                <progress-component />
                <appbar-component />
                <header-component />
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

export default {
    data : () =>{
      return{
          isWeb : true,
      }
    },
    components : {
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
    }
}
</script>
