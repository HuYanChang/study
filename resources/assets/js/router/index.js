import Vue from 'vue'
import  Router from 'vue-router'

Vue.use(Router);

const routes = [
    {path: '/',component: require('../components/Home/Home.vue')},
    {path: '/square',component: require('../components/Square/Square.vue')}
    ];

const router = new Router({
    routes,
    mode: 'history'
});

export default router