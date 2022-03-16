import Vue from 'vue'
import App from './App.vue'
import vuetify from './plugins/vuetify'
import VueRouter from 'vue-router'
import Home from "./components/Home.vue"
import  SerachTicket  from './components/SearchTicket.vue'
import  ListTickets  from './components/ListTickets.vue'
import store from './store'

Vue.use(VueRouter);


const router = new VueRouter({
  routes:[
    {
      path: '/',
      component: Home,
      name: 'home'
    }, 
    {
      path: '/searchTicket',
      component:SerachTicket,
      name: 'buscar'
    },
    {
      path: '/listarTickets',
      component:ListTickets,
      name: 'listarTickets'
    }
    

  ],
  mode: 'history'

});




Vue.config.productionTip = false


new Vue({
  
  vuetify,
  router,
  store,
  render: h => h(App)
}).$mount('#app')
