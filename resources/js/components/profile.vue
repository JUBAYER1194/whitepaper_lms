<template>
    <v-container class="grey lighten-4" style="padding-bottom:15%;">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <v-row class="d-flex" style="margin-bottom: 5%">
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    max-width="434"
                    tile

                >
                    <v-img
                        height="100%"

                    >
                        <v-row
                            align="end"
                            class="fill-height"
                        >
                            <v-col
                                align-self="start"
                                class="pa-0"
                                cols="12"
                            >
                                <v-avatar
                                    class="profile"
                                    color="grey"
                                    size="164"
                                    tile
                                >
                                    <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                                </v-avatar>
                            </v-col>
                            <v-col class="py-0">
                                <v-list-item
                                    style="color: #0d47a1"
                                >
                                    <v-list-item-content>
                                        <v-list-item-title class="title">Jubayer Ahmed</v-list-item-title>
                                        <v-list-item-subtitle style="padding-bottom:5%">Teacher</v-list-item-subtitle>
                                        <dilog></dilog>
                                    </v-list-item-content>
                                </v-list-item>
                            </v-col>
                        </v-row>
                    </v-img>
                </v-card>

            </v-col>
            <v-col
                cols="6"
                md="8"
            >

                <v-card
                    class="mx-auto"
                    max-width="800"
                    tile
                >
                    <v-card-text>
                        <v-simple-table>
                            <thead>
                            <tr>
                                <th style="background-color: #9652ff"></th>
                                <th
                                    class="white--text"
                                    style="font-size: large;padding-left: 0%;background-color: #9652ff;"

                                >
                                    Profile Information
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr :key="item.name" v-for="item in desserts">
                                <td class="font-weight-black">{{ item.name }}</td>
                                <td class="black--text">{{ item.calories }}</td>

                            </tr>
                            </tbody>
                        </v-simple-table>

                    </v-card-text>

                </v-card>

            </v-col>
        </v-row>
        <v-row class="d-flex">
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    max-width="344"
                    outlined
                >
                    <v-list-item three-line>
                        <v-list-item-content>
                            <div class="overline mb-4">Class</div>
                            <v-list-item-title class="headline mb-1">Physics</v-list-item-title>
                            <v-list-item-subtitle>section:10</v-list-item-subtitle>
                        </v-list-item-content>

                        <v-list-item-avatar
                            color="#9652ff"
                            size="80"
                            tile
                        ></v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions>
                        <v-btn style="color: white;background-color:#9652ff">go to the class</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    max-width="344"
                    outlined
                >
                    <v-list-item three-line>
                        <v-list-item-content>
                            <div class="overline mb-4">Class</div>
                            <v-list-item-title class="headline mb-1">Biology</v-list-item-title>
                            <v-list-item-subtitle>section:1</v-list-item-subtitle>
                        </v-list-item-content>

                        <v-list-item-avatar
                            color="#9652ff"
                            size="80"
                            tile
                        ></v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions>
                        <v-btn style="color: white;background-color:#9652ff">go to the class</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    max-width="344"
                    outlined
                >
                    <v-list-item three-line>
                        <v-list-item-content>
                            <div class="overline mb-4">Class</div>
                            <v-list-item-title class="headline mb-1">Chemistry</v-list-item-title>
                            <v-list-item-subtitle>section:5</v-list-item-subtitle>
                        </v-list-item-content>

                        <v-list-item-avatar
                            color="#9652ff"
                            size="80"
                            tile
                        ></v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions>
                        <v-btn style="color: white;background-color:#9652ff">go to the class</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
        <v-row class="d-flex">
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    max-width="344"
                    outlined
                >
                    <v-list-item three-line>
                        <v-list-item-content>
                            <div class="overline mb-4">Class</div>
                            <v-list-item-title class="headline mb-1">Physics</v-list-item-title>
                            <v-list-item-subtitle>section:10</v-list-item-subtitle>
                        </v-list-item-content>

                        <v-list-item-avatar
                            color="#9652ff"
                            size="80"
                            tile
                        ></v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions>
                        <v-btn style="color: white;background-color:#9652ff">go to the class</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    max-width="344"
                    outlined
                >
                    <v-list-item three-line>
                        <v-list-item-content>
                            <div class="overline mb-4">Class</div>
                            <v-list-item-title class="headline mb-1">Biology</v-list-item-title>
                            <v-list-item-subtitle>section:1</v-list-item-subtitle>
                        </v-list-item-content>

                        <v-list-item-avatar
                            color="#9652ff"
                            size="80"
                            tile
                        ></v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions>
                        <v-btn style="color: white;background-color:#9652ff">go to the class</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    max-width="344"
                    outlined
                >
                    <v-list-item three-line>
                        <v-list-item-content>
                            <div class="overline mb-4">Class</div>
                            <v-list-item-title class="headline mb-1">Chemistry</v-list-item-title>
                            <v-list-item-subtitle>section:5</v-list-item-subtitle>
                        </v-list-item-content>

                        <v-list-item-avatar
                            color="#9652ff"
                            size="80"
                            tile
                        ></v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions>
                        <v-btn style="color: white;background-color:#9652ff">go to the class</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
        <v-row class="d-flex">
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    max-width="344"
                    outlined
                >
                    <v-list-item three-line>
                        <v-list-item-content>
                            <div class="overline mb-4">Class</div>
                            <v-list-item-title class="headline mb-1">Physics</v-list-item-title>
                            <v-list-item-subtitle>section:10</v-list-item-subtitle>
                        </v-list-item-content>

                        <v-list-item-avatar
                            color="#9652ff"
                            size="80"
                            tile
                        ></v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions>
                        <v-btn style="color: white;background-color:#9652ff">go to the class</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    max-width="344"
                    outlined
                >
                    <v-list-item three-line>
                        <v-list-item-content>
                            <div class="overline mb-4">Class</div>
                            <v-list-item-title class="headline mb-1">Biology</v-list-item-title>
                            <v-list-item-subtitle>section:1</v-list-item-subtitle>
                        </v-list-item-content>

                        <v-list-item-avatar
                            color="#9652ff"
                            size="80"
                            tile
                        ></v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions>
                        <v-btn style="color: white;background-color:#9652ff">go to the class</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    max-width="344"
                    outlined
                >
                    <v-list-item three-line>
                        <v-list-item-content>
                            <div class="overline mb-4">Class</div>
                            <v-list-item-title class="headline mb-1">Chemistry</v-list-item-title>
                            <v-list-item-subtitle>section:5</v-list-item-subtitle>
                        </v-list-item-content>

                        <v-list-item-avatar
                            color="#9652ff"
                            size="80"
                            tile
                        ></v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions>
                        <v-btn style="color: white;background-color:#9652ff">go to the class</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
    </v-container>
</template>
<script>
    import dilog from "./updateprofile_dilog";

    export default {
        components: {dilog},
        data() {
            return {

                desserts: [
                    {
                        name: 'Full Name:',
                        calories: 'Jubayer Ahmed',
                    },
                    {
                        name: 'Email:',
                        calories: 'jubayer@whitepaper.tech',
                    },
                    {
                        name: 'Phone_no:',
                        calories: '0181215641',
                    },
                    {
                        name: 'Address:',
                        calories: 'c block,bashundhara',
                    },


                ],

            }
        }
    }
</script>
<style>
    td {
        padding: 0;
    }

    thead {
        text-decoration: none;
        font-size: 10000px;
    }
</style>
