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
                                        label="First Name"
                                        name="first_name"
                                        v-model="form.first_name"
                                        prepend-icon="person"
                                        type="text"
                                    ></v-text-field>
                                    <v-text-field
                                        label="Last Name"
                                        name="last_name"
                                        v-model="form.last_name"
                                        prepend-icon="person"
                                        type="text"
                                    ></v-text-field>
                                    <v-text-field
                                        label="Email"
                                        name="email"
                                        v-model="form.email"
                                        prepend-icon="email"
                                        type="email"
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
                                    <v-select
                                        :items="roles"
                                        item-text="name"
                                        item-value="id"
                                        label="Select your Role"
                                        prepend-icon="supervisor_account"

                                    ></v-select>
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
                    first_name:null,
                    last_name:null,
                    email:null,
                    password:null,
                    role_id:null,
                    password_confirmation: null,

                },
                roles:{},
                errors:{},


            }

            },
        created(){

            if(User.loggedIn()){
                window.location = '/home'
            }

          axios.get('/api/role')
              .then(res =>this.roles=res.data.data)
              .catch(error =>console.log(error.response.data))
        },

        methods:
            {
                signup() {
                    axios.post('/api/auth/signup', this.form)
                        .then(res => window.location = '/')
                },
                login(){
                    window.location = '/'
                },

            }

        }




</script>
