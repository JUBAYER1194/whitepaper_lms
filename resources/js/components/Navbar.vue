<template>
    <div>
 <nav color="grey lighten-3">
     <v-navigation-drawer
         :clipped="$vuetify.breakpoint.lgAndUp"
         app
         v-model="drawer"
         color="#3b5998"
         dark
         style="font-size:20px;padding-top: 10px;"
         fixed
         width="250"
         flat

     >
         <v-list dense

         >
             <v-layout column align-center>
                 <v-flex
                     class="text-xs-center mt-5"
                     xs6

                 >
                     <v-avatar style="margin-left: 15%" size="100">
                         <v-img :src="'http://127.0.0.1:8000/uploads/x/x/profile/blank-profile.png'"
                                v-if="user.image==null"></v-img>
                         <v-img :src="'http://127.0.0.1:8000/uploads/x/x/profile/'+ user.image"
                                v-else></v-img>
                     </v-avatar>
                     <p style="margin-top: 10px;">{{user.first_name}} {{user.last_name}}</p>

                 </v-flex>

             </v-layout>
             <br>

             <v-list-item v-if="permission=='Admin'">
                 <v-list-item-icon>
                     <v-icon>dashboard</v-icon>
                 </v-list-item-icon>

                 <v-list-item-title>
                     <router-link to="/lms/admin/dashboard" style="color: white;text-decoration: none;font-size: 120%">
                         Dashboard
                     </router-link>
                 </v-list-item-title>
             </v-list-item>

             <v-list-item>
                 <v-list-item-icon>
                     <v-icon>account_circle</v-icon>
                 </v-list-item-icon>

                 <v-list-item-title>
                     <router-link to="/lms/profile" style="color: white;text-decoration: none;font-size: 120%">
                          Profile
                     </router-link>
                 </v-list-item-title>
             </v-list-item>
             <v-list-item>
                 <v-list-item-icon>
                     <v-icon>calendar_today</v-icon>
                 </v-list-item-icon>

                 <v-list-item-title>
                     <router-link to="/lms/calendar" style="color: white;text-decoration: none;font-size: 120%">
                         Calendar View
                     </router-link>
                 </v-list-item-title>
             </v-list-item>


             <v-list-group v-for="(classs,index) in classes" v-if="classs.status==1" :key="classs.id">
                 <template v-slot:activator>
                     <v-list-item-icon>
                         <v-icon style="color: white">class</v-icon>
                     </v-list-item-icon>
                     <v-list-item-title style="color: white;font-size: 0.8em">{{classs.name}}</v-list-item-title>
                 </template>
                 <div v-for="(auth_subject,index) in classs.auth_subject">
                 <v-list-item style="margin-left:20%" v-for="(subject,index) in classs.subject" v-if="subject.status==1 && auth_subject==subject.id" :key="subject.id">

                     <v-list-item-title>
                         <a :href="'/lms/class/'+subject.name" style="color:white;text-decoration: none;font-size: 120%">{{subject.name}}</a>
                     </v-list-item-title>

                     <v-list-item-icon >
                         <v-icon> menu_book</v-icon>
                     </v-list-item-icon>
                 </v-list-item>
                 </div>
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

         <appNotification></appNotification>


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

    import appNotification from "./appNotification.vue"
    export default
    {
        components:{appNotification},
        data(){

            return {
                loggedIn: User.loggedIn(),
                dialog: false,
                drawer: null,
                classes: {},
                user_id: null,
                user:{},
                permission:null,

            }
        },
        created() {
            this.permission=User.role();
            this.user_id = User.id();
            axios.get(`/lms/api/class/${this.user_id}`)
                .then(res => this.classes = res.data.data);
            axios.get(`/lms/api/information/${this.user_id}`)
                .then(res => this.user = res.data.data);
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
