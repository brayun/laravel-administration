import Vue from 'vue';
import Router from 'vue-router';

import Layout from '../layout/Layout.vue';
import Login from '../pages/common/Login.vue';
import Dashboard from '../pages/Dashboard.vue';

Vue.use(Router);

window.layout = Layout

const routes = [
    {
        path: '/',
        component: window.layout,
        children: [
            {
                path: '/',
                component: Dashboard
            }
        ]
    },
    {
        path: '/login',
        component: Login
    }
];

const router = new Router({
    routes
});


export default router
