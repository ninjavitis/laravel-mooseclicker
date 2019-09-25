import Vue from 'vue'
    import Vuex from 'vuex'
    import Router from 'vue-router'
    import actions from './actions'
    import mutations from './mutations'
    import getters from './getters'
    import state from "./state";

    Vue.use(Vuex);
    Vue.use(Router);

    export default new Vuex.Store({
        state,
        mutations,
        getters,
        actions
    })

    export default new Router({
        mode: 'history',
        base: process.env.BASE_URL,
        routes: [
            {
                path: '/',
                name: 'home',
                component: Home
            },
        ]
    })