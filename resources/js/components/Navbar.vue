<template>
 <nav color="grey lighten-3">
     <v-navigation-drawer
         :clipped="$vuetify.breakpoint.lgAndUp"
         app
         v-model="drawer"
        color="#9652ff"
         dark
     >
         <v-list dense>
             <v-layout column align-center>
                 <v-flex class="mt-5">
                     <v-avatar size="100">
                         <img class="text-lg-center" src="/avatar-1.png">
                     </v-avatar>
                     <p class="white--text subheading mt-1">The Net Ninja</p>
                 </v-flex>
                 <v-flex class="mt-4 mb-3">
                     <Popup/>
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
                     <v-flex xs6>
                         <v-subheader v-if="item.heading">
                             {{  }}
                         </v-subheader>
                     </v-flex>
                     <v-flex
                         class="text-xs-center"
                         xs6
                     >
                         <a
                             class="body-2 black--text"
                             href="#!"
                         >EDIT</a>
                     </v-flex>
                 </v-layout>
                 <v-list-group
                     :key="item.text"
                     :prepend-icon="item.model ? item.icon : item['icon-alt']"
                     append-icon=""
                     v-else-if="item.children"
                     v-model="item.model"
                     :href="item.to"

                 >
                     <template v-slot:activator>
                         <v-list-item>
                             <v-list-item-content>
                                 <v-list-item-title>
                                     <div class="hidden-sm-and-down">
                                     <router-link :to="item.to">
                                     {{ item.text }}
                                     </router-link>
                                     </div>
                                 </v-list-item-title>
                             </v-list-item-content>
                         </v-list-item>
                     </template>
                     <v-list-item
                         :key="i"
                         @click=""
                         v-for="(child, i) in item.children"
                     >
                         <v-list-item-action v-if="child.icon">
                             <v-icon>{{ child.icon }}</v-icon>
                         </v-list-item-action>
                         <v-list-item-content>
                             <v-list-item-title>
                                 <div class="hidden-sm-and-down">
                                 <router-link
                                 :to="child.to">
                                 {{ child.text }}
                                 </router-link>
                                     </div>
                             </v-list-item-title>
                         </v-list-item-content>
                     </v-list-item>
                 </v-list-group>
                 <v-list-item
                     :key="item.text"
                     @click=""
                     v-else
                 >
                     <v-list-item-action>
                         <v-icon>{{ item.icon }}</v-icon>
                     </v-list-item-action>
                     <v-list-item-content>
                         <v-list-item-title>
                             <div class="hidden-sm-and-down">
                             <router-link
                              :to="item.to">
                                 {{ item.text }}
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

         >
             <span>Sign Out</span>
             <v-icon right>exit_to_app</v-icon>
         </v-btn>

     </v-app-bar>
 </nav>
</template>
<script>
    import Navbar from './Navbar.vue'
    export default
    {
        components: { Navbar },
        data(){
            return {
                dialog: false,
                drawer: null,
                items: [
                    {icon: 'contacts', text: 'profile',to:"/profile"},
                    {icon: 'contacts', text: 'login',to:"/login"},
                    {icon: 'contacts', text: 'Sign Up',to:"/signup"},

                    {
                        icon: 'keyboard_arrow_up',
                        'icon-alt': 'keyboard_arrow_down',
                        text: 'ClassRoom',
                        model: false,
                        children: [
                            {icon: 'add', text: 'Physics',to:'/class'},
                        ],
                    },
                    {
                        icon: 'keyboard_arrow_up',
                        'icon-alt': 'keyboard_arrow_down',
                        text: 'Exam',
                        model: false,
                        children: [
                            {icon: 'add', text: 'Physics',to:'/login'},

                        ],
                    },
                    {icon: 'chat_bubble', text: 'Calender View',to:'/calender'},
                ],
            }
        }
    }

</script>
