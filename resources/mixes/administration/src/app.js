require('./bootstrap');

import Vue from 'vue';

import App from './App.vue';
import store from './stores';
import router from './router';

import iView from 'iview';
import 'iview/dist/styles/iview.css';
import './assets/less/style.less';

Vue.use(iView);

Vue.config.productionTip = false;

window.instance = new Vue({
    el: '#app',
    router: router,
    store,
    template: '<App/>',
    components: {
        App,
    },
});
