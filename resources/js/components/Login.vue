<template>


            <v-container
                fluid
                fill-height
                flat
            >

                <v-layout
                    align-center
                    justify-center

                >
                    <v-flex
                        xs12
                        sm8
                        md4
                    >
                        <v-card
                            class="elevation-5"
                            flat
                        >
                            <v-toolbar
                                color="#3b5998"
                                dark
                                flat
                            >
                                <v-toolbar-title>Login</v-toolbar-title>
                                <v-spacer></v-spacer>
                            </v-toolbar>
                            <v-card-text>
                                <v-form
                                >
                                    <v-text-field
                                        label="Email"
                                        name="login"
                                        prepend-icon="person"
                                        v-model="form.email"
                                        type="text"
                                    ></v-text-field>

                                    <v-text-field
                                        id="password"
                                        label="Password"
                                        name="password"
                                        v-model="form.password"
                                        prepend-icon="lock"
                                        type="password"
                                    ></v-text-field>
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-btn depressed style="background-color:#3b5998;color: white;text-transform: none !important;margin: 3%"  @click="signup">Sign Up</v-btn>
                                <v-spacer></v-spacer>
                                <v-btn depressed style="background-color:#3b5998;color: white;text-transform: none !important;margin: 3%" type="submit" @click="login">Login</v-btn>

                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>


</template>

<script>
    export default {
        data ()  {
            return{
                form:{
                    email:null,
                    password:null,
                },


            }

        },
        created(){
            if(User.loggedIn()){
                this.$router.push({name:'profile'})
                // window.location = '/'
            }

        },
        methods:{
            login(){
               User.login(this.form)

            },
            signup(){
                window.location = '/signups'
            }

        },
    }



</script>
