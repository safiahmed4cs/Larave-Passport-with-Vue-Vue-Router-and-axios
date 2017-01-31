require('./bootstrap');

import router from './routes'

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app',
    router
});
