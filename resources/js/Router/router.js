import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Login from'../components/Login.vue'
import SignUp from'../components/Signup.vue'
import Calender from'../components/Calender.vue'
import Profile from'../components/Profile.vue'


const routes = [

     { path: '/login', component: Login },
     { path: '/signup', component: SignUp },
    { path: '/calender', component: Calender },
    { path: '/profile', component: Profile },


]

const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang:false,
    mode: 'history'
})
export default router
