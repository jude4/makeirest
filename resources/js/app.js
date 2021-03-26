require('./bootstrap');

// Import modules...
import Vue from "vue"
import { App, plugin } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress';

import vuetify from './plugins/vuetify'

import Vuesax from 'vuesax'

import 'vuesax/dist/vuesax.css' //Vuesax styles


Vue.use(plugin)
Vue.use(vuetify)
Vue.use(Vuesax)

const el = document.getElementById('app')

new Vue({
  vuetify,
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
      resolveComponent: name => require(`./Pages/${name}`).default,
    //   resolveComponent: name => import(`./Pages/${name}`).then(module => module.default),
    },
  }),
}).$mount(el)



InertiaProgress.init({ color: '#4B5563' });
