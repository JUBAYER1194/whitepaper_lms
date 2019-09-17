<template>


            <v-container
                fluid
                fill-height
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
                        <v-card class="elevation-12">
                            <v-toolbar
                                color="#9652ff"
                                dark
                                flat
                            >
                                <v-toolbar-title>SignUp form</v-toolbar-title>
                                <v-spacer></v-spacer>

                            </v-toolbar>
                            <v-card-text>
                                <v-form @submit.prevent="signup">
                                    <v-text-field
                                        label="Name"
                                        name="name"
                                        v-model="form.name"
                                        prepend-icon="person"
                                        type="text"
                                    ></v-text-field>
                                    <v-text-field
                                        label="Email"
                                        name="email"
                                        v-model="form.email"
                                        prepend-icon="person"
                                        type="email"
                                    ></v-text-field>
                                    <v-text-field
                                        label="NID No"
                                        name="nid"
                                        v-model="form.nid"
                                        prepend-icon="person"
                                        type="number"
                                    ></v-text-field>
                                    <v-text-field
                                        id="password"
                                        label="Password"
                                        name="password"
                                        v-model="form.password"
                                        prepend-icon="lock"
                                        type="password"
                                    ></v-text-field>
                                    <v-text-field
                                        id="Confirm Your password"
                                        label="Confirm  password"
                                        name="password"
                                        v-model="form.password_confirmation"
                                        prepend-icon="lock"
                                        type="password"
                                    ></v-text-field>
                                    <v-text-field
                                        label=""
                                        name="login"
                                        prepend-icon="person"
                                        type="file"
                                        v-model="form.file"
                                    ></v-text-field>
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn style="background-color:#9652ff;color: white;" type="submit" @click="login">Login</v-btn>
                                <v-btn
                                    color="#9652ff"
                                    dark
                                    @click="signup"
                                >
                                    Sign Up</v-btn>

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
                    name:null,
                    password_confirmation:null,
                    file:null,
                    nid:null,


                },
                errors:{}

            }

            },

        methods:
            {
                signup(){
                    axios.post('/api/auth/signup',this.form)
                        .then(res=> {
                            User.responseAfterLogin(res)
                            this.$router.push({name:'forum'})})
                        .catch(error =>this.errors = error.response.data.errors)
                },
                login(){
                    window.location = '/'
                }
            }

        }




</script>
