import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        isLogged : false,
        show : true,
    },
    mutations: {
        CHECK_URL(store,option)
        {
            try {
                let url = window.location.href
                url = url.split('/')
                if(url[3] == 'reset')
                {
                    store.show = false
                }
            }catch (e) {
                console.log(e.toString())
            }
        },
        CHECK_URL_RESET(store,option)
        {
            try {
                let url1 = window.location.href
                url1 = url1.split('/')
                let temp;
                let exists = false
                for (const url1Element of url1) {
                    temp = url1Element.split('?')
                    if(temp[1] !== undefined)
                    {
                        if(temp[0] == 'reset-password' && temp[1].includes('token='))
                        {
                            exists = true
                        }
                    }
                }
                if(exists)
                {
                    store.show = false
                }else{
                    window.location.href = '/'
                }
            }catch (e) {
                console.log(e.toString())
            }
        }
    },
    actions: {
    },
    modules: {
    }
})
