import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
    {
        path : '/',
        component: () => import('../components/MainComponent')
    },
    {
        path : '/signup',
        component: () => import('../components/ActionComponent')
    },
    {
        path : '/reset',
        component: () => import('../components/ResetComponent')
    },
    {
        path : '/reset-password',
        component: () => import('../components/ResetPasswordConfirm')
    },
    {
        path : '/:category',
        component : () => import('../pages/CategoryPage')
    },
    {
        path : '/product/:slug',
        component : () => import('../pages/ProductDetailsPage')
    }
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router
