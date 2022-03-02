import Vue from 'vue'
import VueRouter from 'vue-router'
import VueCookies from 'vue-cookies'

Vue.use(VueRouter)
Vue.use(VueCookies)


import App from './views/App'
import Home from './views/Home'
import CabinetMy from "./views/CabinetMy";
import MyTrips from "./views/MyTrips";
import Notes from "./views/Notes";
import Auth from "./views/Auth";
import Register from "./views/Register";
import Forget from "./views/Forget";

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/editpage',
            name: 'editpage',
            component: CabinetMy
        },
        {
            path: '/myTrips',
            name: 'myTrips',
            component: MyTrips
        },
        {
            path: '/notes',
            name: 'notes',
            component: Notes
        },
        {
            path: '/auth',
            name: 'auth',
            component: Auth
        },
        {
            path: '/register',
            name: 'register',
            component: Register
        },
        {
            path: '/forget',
            name: 'forget',
            component: Forget
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
