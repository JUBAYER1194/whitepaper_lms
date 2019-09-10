import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Login from'../components/Login.vue'
import SignUp from'../components/Signup.vue'
import Calender from'../components/Calender.vue'
import Profile from'../components/Profile.vue'
import Class from'../components/Class.vue'
import Announcement from '../components/Announcement.vue'
import Discussion from '../components/Discussion.vue'
import Assignment from '../components/Assaignment.vue'
import Student from '../components/Student.vue'
import Information from "../components/Information.vue";


const routes = [

     { path: '/login', component: Login },
     { path: '/signup', component: SignUp },
    { path: '/calender', component: Calender },
    { path: '/profile', component: Profile },
    { path: '/class', component: Class },
    { path: '/announcement', component: Announcement },
    { path: '/assignment', component: Assignment },
    { path: '/discussion', component: Discussion },
    { path: '/student', component: Student },
    { path: '/information', component: Information},


]

const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang:false,
    mode: 'history'
})
export default router
