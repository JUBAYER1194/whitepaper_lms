<template>
    <v-container style="margin-top: 10px" class="grey lighten-4">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <v-row >
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
                        src="https://cdn.vuetifyjs.com/images/cards/server-room.jpg"
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
                                    color="rgba(0, 0, 0, .4)"
                                    dark
                                >
                                    <v-list-item-content>
                                        <v-list-item-title class="title">Jubayer Ahmed</v-list-item-title>
                                        <v-list-item-subtitle>Teacher</v-list-item-subtitle>
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
                        max-width="50%"
                    >
                        <v-card-text>
                            <v-simple-table>
                                <thead>
                                <tr>
                                    <th style="background-color: #9652ff"></th>
                                    <th
                                        class="white--text"
                                        style="font-size: large;padding-left: 0px;background-color: #9652ff;"

                                    >
                                        Profile Information </th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="item in desserts" :key="item.name">
                                    <td class="font-weight-black">{{ item.name }}</td>
                                    <td class="black--text" >{{ item.calories }}</td>

                                </tr>
                                </tbody>
                            </v-simple-table>

                        </v-card-text>

                    </v-card>

            </v-col>
        </v-row>
        <br>
        <br>

        <v-row style="padding: 23px">
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
                            tile
                            size="80"
                            color="#9652ff"
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
                            tile
                            size="80"
                            color="#9652ff"
                        ></v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions >
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
                            tile
                            size="80"
                            color="#9652ff"
                        ></v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions>
                        <v-btn style="color: white;background-color:#9652ff">go to the class</v-btn>
                    </v-card-actions>
                </v-card>
            </v-col>
        </v-row>
        <v-row style="padding: 23px">
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
                            tile
                            size="80"
                            color="#9652ff"
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
                            tile
                            size="80"
                            color="#9652ff"
                        ></v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions >
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
                            tile
                            size="80"
                            color="#9652ff"
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
    export default {
        data() {
            return {
                team: [
                    { name: 'The Net Ninja', role: 'Web developer', avatar: '/avatar-1.png' },
                    { name: 'Ryu', role: 'Graphic designer', avatar: '/avatar-2.png' },
                    { name: 'Chun Li', role: 'Web developer', avatar: '/avatar-3.png' },
                    { name: 'Gouken', role: 'Social media maverick', avatar: '/avatar-4.png' },
                    { name: 'Yoshi', role: 'Sales guru', avatar: '/avatar-5.png'}

                ],
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
        padding:0;
    }
    thead {  text-decoration: none;
          font-size:10000px;
        }
</style>
