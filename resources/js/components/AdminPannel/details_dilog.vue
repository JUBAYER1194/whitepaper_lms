
<template>
    <v-row justify="center">
        <v-dialog v-model="dialog" persistent max-width="600px">
            <template v-slot:activator="{ on }">
                <v-btn
                    v-on="on"
                    style="float: right;background-color: #9652ff;color: white"
                >View Profile</v-btn>
            </template>
            <v-card>
                <v-card-title>
                    <span class="headline">User Profile</span>
                </v-card-title>
                <v-card-text>
                    <v-container>
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
                                    max-width="100%"
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

                    </v-container>
                </v-card-text>
                <v-card-actions>
                    <div class="flex-grow-1"></div>
                    <v-btn style="background-color:#9652ff;color: white" text @click="dialog = false">Close</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-row>
</template>
<script>
    export default {
        data: () => ({
            dialog: false,
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
        }),
    }
</script>
