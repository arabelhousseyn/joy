<template>
    <div >
        <v-app style="background-color: #f5f5f5 !important;">
            <div v-if="isWeb" class="web">
                <progress-component />
                <appbar-component />
                <router-view />
            </div>
            <div v-if="!isWeb" class="mobile">
            </div>
        </v-app>
    </div>
</template>
<script>
import appbarComponent from '../components/web/appbarComponent'
import progressComponent from '../components/progressComponent'

export default {
    data : () =>{
      return{
          isWeb : true,
      }
    },
    components : {
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
