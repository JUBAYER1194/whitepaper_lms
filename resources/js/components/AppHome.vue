<template>
    <div>
        <v-app class="grey lighten-2">
            <Navbar />
            <v-content class="mx-4 mb-4">
                <router-view></router-view>
            </v-content>
            <f> </f>

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
