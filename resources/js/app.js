require('./bootstrap');

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

import HomeComponent from './components/HomeComponent.vue';
import CreateBookComponent from './components/CreateBookComponent.vue';
import IndexBooksComponent from './components/IndexBooksComponent.vue';
import EditBookComponent from './components/EditBookComponent.vue';

const routes = [
    {
        name: 'home',
        path: '/admin',
        component: HomeComponent
    },
    {
        name: 'books.create',
        path: '/admin/books/create',
        component: CreateBookComponent
    },
    {
        name: 'books.index',
        path: '/admin/books',
        component: IndexBooksComponent
    },
    {
        name: 'books.edit',
        path: '/admin/books/edit/:id',
        component: EditBookComponent
    }
];

const router = new VueRouter({ mode: 'history', routes: routes});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});
