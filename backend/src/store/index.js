import {createStore} from 'vuex';
import * as actions from './actions'
import * as mutations from './mutations'

const store = createStore({
    state: {
        user: {
            token: sessionStorage.getItem('TOKEN'),
            data: {}
        },
        products: {
            loading: false,
            data: [],
            links: [],
            from: null,
            to: null,
            page: 1,
            limit: null,
            total: null
        },
        orders: {
            loading: false,
            data: [],
            links: [],
            from: null,
            to: null,
            page: 1,
            limit: null,
            total: null
        },
        customers: {
            loading: false,
            data: [],
            links: [],
            from: null,
            to: null,
            page: 1,
            limit: null,
            total: null
        },
        countries: [],
        toast: {
            show: false,
            message: '',
            delay: 5000
        },
    },
    getters: {},
    actions,
    mutations
})

export default store