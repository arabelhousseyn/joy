import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import '@mdi/font/css/materialdesignicons.css'
Vue.use(Vuetify)

export default new Vuetify({
    icons: {
        iconfont: 'mdi',
    },
    theme: {
        themes: {
            light: {
                primary: '#ff9900',
                secondary: '#3665f3',
                accent: '#8c9eff',
                error: '#b71c1c',
                white : '#FFF'
            },
        },
    },
})
