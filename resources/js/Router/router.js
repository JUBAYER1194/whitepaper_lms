import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Login from'../components/Login.vue'
import SignUp from'../components/Signup.vue';
import Calender from'../components/Calender.vue';
import Profile from'../components/Profile.vue';
import Class from'../components/Class.vue';
import Announcement from '../components/Announcement.vue';
import Discussion from '../components/Discussion.vue';
import Assignment from '../components/Assaignment.vue';
import Student from '../components/Student.vue';
import Information from "../components/Information.vue";
import Admin from "../components/AdminPannel/index.vue"
import lms from "../components/AppHome.vue";
import AppHome from "../components/AppHome";
import Logout from "../components/Logout";


const routes = [

     { path: '/login', component: Login },
     { path: '/signup', component: SignUp },
    { path: '/calender', component: Calender },
    { path: '/profile', component: Profile,name:'profile'},
    { path: '/class', component: Class,name:'class'},
    { path: '/announcement', component: Announcement },
    { path: '/assignment', component: Assignment },
    { path: '/discussion', component: Discussion },
    { path: '/student', component: Student },
    { path: '/information', component: Information},
    { path: '/admin/dashboard', component: Admin},
    { path: '/lms', component: lms},
    { path: '/home', component: AppHome,name:'home'},
    { path: '/logout', component: Logout,name:'logout'},



]

const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang:false,
    mode: 'history'
})
export default router
