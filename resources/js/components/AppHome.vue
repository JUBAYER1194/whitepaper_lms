<template>
    <div>
        <v-app >
            <Navbar class="grey lighten-2" />
            <v-content  class="grey lighten-4 mx-1 mb-1">
                <router-view/>
            </v-content>
          <f/>

        </v-app>

    </div>

</template>
<script>
    import f from './Footer.vue';
    import Navbar from './Navbar.vue';

    export default
    {
        components: { Navbar,f},

        methods:{
            logged(){
                if(User.loggedIn()){
                    return true;
                }
                else{
                    return false;
                }
            }
        }
    }

</script>
