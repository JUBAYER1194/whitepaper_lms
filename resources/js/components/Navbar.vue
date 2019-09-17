<template>
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
             <template v-for="item in items">
                 <v-layout
                     :key="item.heading"
                     align-center
                     row
                     v-if="item.heading"
                     :to="item.to"
                 >
                     <v-flex
                         class="text-xs-center"
                         xs6
                     >
                     </v-flex>
                 </v-layout>
                 <v-list-group
                     :key="item.text"
                     :prepend-icon="item.model ? item.icon : item['icon-alt']"
                     append-icon=""
                     v-else-if="item.children"
                     v-model="item.model"
                     no-action
                     sub-group
                     value="true"
                 >


                     <template v-slot:activator>
                         <v-list-item >
                             <v-list-item-content>
                                 <v-list-item-title style="font-size: 15px">
                                     {{ item.text }}
                                 </v-list-item-title>
                             </v-list-item-content>
                         </v-list-item>
                     </template>

                     <v-list-item
                         v-for="(child, i) in item.children"
                         :key="i"
                         @click=""
                     >
                         <v-list-item-action v-if="child.icon">
                             <v-icon>{{ child.icon }}</v-icon>
                         </v-list-item-action>
                         <v-list-item-content>
                             <v-list-item-title>
                                 <router-link
                                     class="white--text"
                                     :to="child.to"
                                     style="font-size: 13px"
                                 >
                                 {{ child.text }}
                                 </router-link>
                             </v-list-item-title>
                         </v-list-item-content>
                     </v-list-item>

                 </v-list-group>
                 <v-list-item
                     :key="item.text"
                     @click=""
                     v-else
                     v-show="item.show"
                 >
                     <v-list-item-action>
                         <v-icon>{{ item.icon }}</v-icon>
                     </v-list-item-action>
                     <v-list-item-content>
                         <v-list-item-title>
                             <div class="hidden-sm-and-down">
                             <router-link class="white--text"
                              :to="item.to" >
                                 {{item.text}}
                             </router-link>
                             </div>

                         </v-list-item-title>
                     </v-list-item-content>
                 </v-list-item>
             </template>
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
             color="grey"
         >

         </v-app-bar-nav-icon>
         <v-toolbar-title
             style="width: 300px"
             class="text-uppercase grey--text"
         >

             <span class="font-weight-light">LMS</span>
         </v-toolbar-title>
         <v-spacer></v-spacer>


         <v-btn
             icon
             depressed
             color="grey"
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
             color="grey lighten-2"
             depressed
             class="text-uppercase grey--text"
             href="/logout"

         >
             <span>Sign Out</span>
             <v-icon right>exit_to_app</v-icon>
         </v-btn>

     </v-app-bar>
 </nav>
</template>
<script>
    import dilog from './Dilog.vue'
    export default
    {
        components: { dilog },
        data(){

            return {
                loggedIn: User.loggedIn(),
                dialog: false,
                drawer: null,
                items: [
                    {icon: 'account_circle', text: 'profile',to:"/profile",show: true },
                    {icon: 'exit_to_app', text: 'login',to:"/login",show: !User.loggedIn()},
                    {icon: 'contacts', text: 'Sign Up',to:"/signup",show: !User.loggedIn()},
                    //{icon: 'contacts', text: 'Logout',to:"/logout",show: User.loggedIn()},

                    {
                        icon: 'keyboard_arrow_up',
                        'icon-alt': 'keyboard_arrow_down',
                        text: 'ClassRoom',
                        model: false,
                        children: [
                            {icon: 'public', text: 'Physics',to:'/class',show: true },
                        ],
                    },
                    {
                        icon: 'keyboard_arrow_up',
                        'icon-alt': 'keyboard_arrow_down',
                        text: 'Exam Result',
                        model: false,
                        children: [
                            {icon: 'public', text: 'Physics',to:'/login',show: true },

                        ],
                    },
                    {icon: 'border_all', text: 'Calender View',to:'/calender',show: true },
                    {icon: 'dashboard', text: 'Admin DashBoard',to:"/admin/dashboard",show: true },
                ],
            }
        },
        created() {
            EventBus.$on("logout", () => {
                User.logout();
            });
        },
        methods:{

        },
    }

</script>
<style>
    a {  text-decoration: none;
         color: white;
         font-size: 15px;
         }
</style>
