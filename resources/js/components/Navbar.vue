<template>
    <div>
 <nav color="grey lighten-3">
     <v-navigation-drawer
         :clipped="$vuetify.breakpoint.lgAndUp"
         app
         v-model="drawer"
         color="#9652ff"
         dark
         style="font-size:20px;padding-top: 10px;"
         fixed
         width="300"
         flat

     >
         <v-list dense

         >
             <v-layout column align-center>
                 <v-flex
                     class="text-xs-center mt-5"
                     xs6

                 >
                     <v-avatar size="100">
                         <img class="text-lg-center" src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg">
                     </v-avatar>
                     <p style="margin-top: 10px;">Jubayer Ahmed</p>
                     <dilog></dilog>

                 </v-flex>

             </v-layout>
             <br>

             <v-list-item v-for="item in items" :key="index">
                 <v-list-item-icon>
                     <v-icon>{{item.icon}}</v-icon>
                 </v-list-item-icon>

                 <v-list-item-title>
                     <router-link :to="item.to" style="color: white;text-decoration: none;font-size: 120%">
                         {{item.text}}
                     </router-link>
                 </v-list-item-title>
             </v-list-item>


             <v-list-group>
                 <template v-slot:activator>
                     <v-list-item-icon>
                         <v-icon style="color: white">account_circle</v-icon>
                     </v-list-item-icon>
                     <v-list-item-title style="color: white;font-size: 100%">ClassRoom</v-list-item-title>
                 </template>
                 <v-list-item style="margin-left:20%" v-for="classs in classes" :key="classs.id">
                     <v-list-item-title>
                         <a :href="'/lms/class/'+classs.name" style="color:white;text-decoration: none;font-size: 120%">{{classs.name}}</a>
                     </v-list-item-title>
                     <v-list-item-icon>
                         <v-icon> adb</v-icon>
                     </v-list-item-icon>
                 </v-list-item>
             </v-list-group>

         </v-list>
     </v-navigation-drawer>

     <v-app-bar
         :clipped-left="$vuetify.breakpoint.lgAndUp"
         app
         fixed
         flat
         class="grey lighten-2"
         dark
         style="padding-bottom: 10px"




     >
         <v-app-bar-nav-icon
             @click.stop="drawer = !drawer"
             depressed
             style="background-color:#E0E0E0;color:#757575;"
         >

         </v-app-bar-nav-icon>
         <v-toolbar-title
             class="text-uppercase"
             style="background-color:#E0E0E0;color:#757575;width: 300px"
         >

             <span class="font-weight-bold">LMS</span>
         </v-toolbar-title>
         <v-spacer></v-spacer>


         <v-btn
             icon
             depressed
             style="background-color:#E0E0E0;color:#757575;"
         >
             <v-icon>notifications</v-icon>
         </v-btn>
         <v-btn
             icon
             large
         >
             <v-avatar
                 item
                 size="32px"
             >
                 <v-img
                     alt="Vuetify"
                     src="https://cdn.vuetifyjs.com/images/logos/logo.svg"
                 >
                 </v-img>
             </v-avatar>
         </v-btn>

         <v-btn
             depressed
             style="background-color:#E0E0E0;color:#757575;"



         >
             <span class="font-weight-bold" @click="createds" style="text-transform: none;">Log Out</span>
             <v-icon right>exit_to_app</v-icon>
         </v-btn>

     </v-app-bar>
 </nav>
    </div>
</template>
<script>
    import dilog from './Dilog.vue';

    export default
    {
        components: { dilog},
        data(){

            return {
                loggedIn: User.loggedIn(),
                dialog: false,
                drawer: null,
                 items: [
                    {icon: 'account_circle', text: 'profile',to:"/lms/profile"},
                     {icon: 'border_all', text: 'Calender View',to:'/lms/calender'},
                     {icon: 'dashboard', text: 'Admin DashBoard',to:"/lms/admin/dashboard"},
                ],
                classes: {},
                user_id: null,

            }
        },
        created() {
            this.user_id = User.id();
            axios.get(`/lms/api/class/${this.user_id}`)
                .then(res => this.classes = res.data);
               this.listen();
        },

        methods:{
            createds() {
                    User.logout();
            },
            listen(){
                EventBus.$on('newClass',(clas) =>{
                    this.classes.unshift(clas)
                })
            },
        },
    }

</script>
<style>

</style>
