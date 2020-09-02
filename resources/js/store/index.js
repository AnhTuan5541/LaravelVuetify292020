import Vue from 'vue'
import Vuex from 'vuex'

import currentUser from './modules/currentUser'
import user from './modules/user'
import product from './modules/product'

Vue.use(Vuex)

export default new Vuex.Store({
    modules: {
        currentUser,
        user,
        product
    }
})