
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import router from './Router/router.js'
import '@mdi/font/css/materialdesignicons.css'
Vue.use(Vuetify)
const vuetifyOptions = {}


// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))



Vue.component('AppHome', require('./components/AppHome.vue').default);



const app = new Vue({
    el: '#app',
    vuetify: new Vuetify(vuetifyOptions),
    router,
    icons: {
        iconfont: 'mdi', // default - only for display purposes
    },
});
