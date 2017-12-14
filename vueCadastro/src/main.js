// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import VueRouter from 'vue-router'
import VueResource from 'vue-resource'
import Cliente from './components/Cliente'

Vue.use(VueResource)
Vue.use(VueRouter)

//construir router obj
const router = new VueRouter({
  mode:'history',
  base:__dirname,
  routes:[
    { 
      path:'/',component: Cliente
    }]
})

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  router,
  template:`
    <div id = "app">
      <router-link to="">
      
     <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">PHP - API</a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li><router-link to="/">Cadastro</router-link></li>
        </ul>
      </div>
     </nav>
     <router-view></router-view>
    </div>
     
     
     
      <router-view></router-view>
    </div>
   `
}).$mount('#app')
