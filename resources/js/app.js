require('./bootstrap');

// Import modules...
import Vue from 'vue';

import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue';
import PortalVue from 'portal-vue';

import { InertiaProgress } from '@inertiajs/progress'


//add these two line
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

// axios.get('/get-permissions').then(
//   response => {
//     window.Laravel.jsPermissions = response.data;
//   }
// );

import LaravelPermissionToVueJS from 'laravel-permission-to-vuejs'


Vue.mixin({ methods: { route } });
Vue.use(InertiaPlugin);
Vue.use(PortalVue);
InertiaProgress.init()


//also add this line
Vue.use(Vuetify);
Vue.use(LaravelPermissionToVueJS);

const app = document.getElementById('app');

new Vue({
    //finally add this line 
    vuetify: new Vuetify(), 
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
