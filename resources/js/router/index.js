import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import User from '../components/user/user'
import Product from '../components/product/product'
import Profile from '../components/profile/profile'

const routes = [
    {
        component: Profile,
        name: 'profile',
        path: '/'
    },
    {
        component: User,
        name: 'user',
        path: '/user'
    },
    {
        component: Product,
        name: 'product',
        path: '/product'
    },
    
]

export default new VueRouter({
    // mode: 'history', //bỏ dấu thăng trên đường dẫn
    routes //short hand for routes: routes
})