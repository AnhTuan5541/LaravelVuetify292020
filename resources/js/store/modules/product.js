
const state = {
    products: []
};
const getters = {};
const actions = {
    getProducts( {commit} ) {
        axios.get('api/v1/product/all')
        .then( response => {
            commit('setProducts', response.data);
        })
    },
};
const mutations = {
    setProducts( state, data) {
        state.products = data
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}