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
                                <v-form>
                                    <v-text-field
                                        label="Name"
                                        name="name"
                                        prepend-icon="person"
                                        type="text"
                                    ></v-text-field>
                                    <v-text-field
                                        label="Email"
                                        name="email"
                                        prepend-icon="person"
                                        type="email"
                                    ></v-text-field>
                                    <v-text-field
                                        label="NID No"
                                        name="nid"
                                        prepend-icon="person"
                                        type="text"
                                    ></v-text-field>
                                    <v-text-field
                                        id="password"
                                        label="Password"
                                        name="password"
                                        prepend-icon="lock"
                                        type="password"
                                    ></v-text-field>
                                    <v-text-field
                                        id="Confirm Your password"
                                        label="Confirm  password"
                                        name="password"
                                        prepend-icon="lock"
                                        type="password"
                                    ></v-text-field>
                                    <v-text-field
                                        label=""
                                        name="login"
                                        prepend-icon="person"
                                        type="file"
                                    ></v-text-field>
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn
                                    color="#9652ff"
                                    dark
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
                drawer: null,

            }

        }
    }



</script>
