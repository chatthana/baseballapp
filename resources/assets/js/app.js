
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window.Vue = require('vue');

var VueRouter = require('vue-router/dist/vue-router');

Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const App = Vue.component('App', require('./components/App.vue'));
const Example = Vue.component('Example', require('./components/Example.vue'));

const routes = [
    {path:'/', component: App, children: [
        {path: '', component: Example}
    ]},
    
];

const router = new VueRouter({
    routes,
    mode: 'history'
});

const app = new Vue({
    router
}).$mount('#app');
