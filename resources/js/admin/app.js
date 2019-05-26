/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('../bootstrap');

window.Vue = require('vue');
window.Vuex = require('vuex');
window.Vuetify = require('vuetify');

Vue.use(Vuex);
Vue.use(Vuetify);


const store = new Vuex.Store({
    state: {
        drawer: false,
    },
    getters: {
      getDrawer(state) {
          return state.drawer;
      }
    },
    mutations: {
        changeDrawer(state, value) {
            state.drawer = value;
        }
    },
});

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
Vue.component('nav-drawer', require('./components/layouts/NavDrawer').default); // navigation drawer
Vue.component('nav-toolbar', require('./components/layouts/NavToolbar').default); // toolbar

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    store
});
