<template>
    <div>
        <v-app class="grey lighten-2">
            <Navbar />
            <v-content class="mx-4 mb-4">
                <router-view></router-view>
            </v-content>
        </v-app>

    </div>

</template>
<script>
    import Navbar from './Navbar.vue';

    export default
    {
        components: { Navbar},

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
