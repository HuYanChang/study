
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');
window.Vue = require('vue');

import router from './router'
import VueRouter from 'vue-router'
import ElementUI from 'element-ui'    //引入element－ui
import 'element-ui/lib/theme-chalk/index.css' //引入element－ui所需的css样式资源文件


Vue.use(ElementUI);    //把引入的ElementUI装入我们的Vue
Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('top', require('./components/Public/Header.vue'));//头部标签
Vue.component('bd', require('./components/Public/Bd.vue'));//内容所在部分
Vue.component('foot', require('./components/Public/Footer.vue'));//尾部标签
Vue.component('login', require('./components/Public/Login.vue'));//登陆标签
Vue.component('recommend', require('./components/Public/Recommend.vue'));//热门标签
Vue.component('lastest', require('./components/Public/Lastest.vue'));//热门标签
Vue.component('carousel', require('./components/Home/Carousels.vue'));//首页走马灯
Vue.component('mix', require('./components/Home/Mix.vue'));//首页混合式消息
Vue.component('home', require('./components/Home/Home.vue'));//首页混合式消息
Vue.component('img-s', require('./components/Square/Img.vue'));//广场上图


new Vue({
    router
}).$mount('#app');
