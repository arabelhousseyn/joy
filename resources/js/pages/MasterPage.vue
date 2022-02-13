<template>
    <div >
        <v-app style="background-color: #f5f5f5 !important;">
            <progress-component />
            <div v-if="isWeb" class="web">
                <appbar-component v-if="$store.state.show" />
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
        this.$store.commit('CHECK_URL')
    }
}
</script>
