<template>
    <v-card
        class="mx-auto"
        max-width="80%"
    >
        <v-img
            class="white--text"
            height="300px"
            src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
        >
            <v-card-title class="align-end fill-height">Physics-107</v-card-title>
        </v-img>

        <v-card-text>
            <v-card>
                <v-tabs vertical>
                    <v-tab>
                        <v-icon left>mdi-account</v-icon>
                        Class Information
                    </v-tab>
                    <v-tab>
                        <v-icon left>mdi-lock</v-icon>
                        Class Material
                    </v-tab>
                    <v-tab>
                        <v-icon left>mdi-access-point</v-icon>
                        Faculty
                    </v-tab>

                    <v-tab-item>
                        <v-card class="mx-auto"
                                flat
                                max-width="50%"
                        >
                            <v-card-text>
                                <v-simple-table>
                                    <tbody>
                                    <tr :key="item.name" v-for="item in desserts">
                                        <td class="font-weight-black">{{ item.name }}</td>
                                        <td class="black--text">{{ item.calories }}</td>

                                    </tr>
                                    </tbody>
                                </v-simple-table>
                            </v-card-text>
                        </v-card>
                    </v-tab-item>
                    <v-tab-item>
                        <v-card
                                class="mx-auto"
                                flat
                                max-width="100%">
                            <v-card-text style="float: right">
                                <dilog></dilog>
                            </v-card-text>

                            <v-card-text>

                                <v-row >
                                    <v-col
                                        cols="12"
                                        md="4"
                                    >
                                        <v-card
                                            class="mx-auto"
                                            max-width="100%"

                                        >
                                            <v-list-item three-line>
                                                <v-list-item-content>
                                                    <div class="overline mb-4">Lesson</div>
                                                    <v-list-item-title class="headline mb-1">Force
                                                    </v-list-item-title>
                                                    <v-list-item-subtitle>some description</v-list-item-subtitle>
                                                    <v-list-item-subtitle>10th August 2019</v-list-item-subtitle>
                                                </v-list-item-content>
                                            </v-list-item>

                                            <v-card-actions>
                                                <v-btn style="color: white;background-color:#9652ff">Click</v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-col>
                                    <v-col
                                        cols="12"
                                        md="4"
                                    >
                                        <v-card
                                            class="mx-auto"
                                            max-width="100%"

                                        >
                                            <v-list-item three-line>
                                                <v-list-item-content>
                                                    <div class="overline mb-4">Lesson</div>
                                                    <v-list-item-title class="headline mb-1">Force
                                                    </v-list-item-title>
                                                    <v-list-item-subtitle>some description</v-list-item-subtitle>
                                                    <v-list-item-subtitle>10th August 2019</v-list-item-subtitle>
                                                </v-list-item-content>

                                            </v-list-item>

                                            <v-card-actions>
                                                <v-btn style="color: white;background-color:#9652ff">Click</v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-col>
                                    <v-col
                                        cols="12"
                                        md="4"
                                    >
                                        <v-card
                                            class="mx-auto"
                                            max-width="100%"

                                        >
                                            <v-list-item three-line>
                                                <v-list-item-content>
                                                    <div class="overline mb-4">Lesson</div>
                                                    <v-list-item-title class="headline mb-1">Force
                                                    </v-list-item-title>
                                                    <v-list-item-subtitle>some description</v-list-item-subtitle>
                                                    <v-list-item-subtitle>10th August 2019</v-list-item-subtitle>
                                                </v-list-item-content>

                                            </v-list-item>

                                            <v-card-actions>
                                                <v-btn style="color: white;background-color:#9652ff">Click</v-btn>
                                            </v-card-actions>
                                        </v-card>
                                    </v-col>

                                </v-row>


                            </v-card-text>
                        </v-card>
                    </v-tab-item>
                    <v-tab-item>
                        <v-card class="mx-auto" flat
                                max-width="50%"

                        >
                            <v-card-text>
                                <v-col>
                                    <v-card
                                        color="white"
                                        dark


                                    >
                                        <v-card-text class="black--text">
                                            <v-list-item-avatar
                                                left
                                                size="125"
                                                tile
                                            >
                                                <v-img
                                                    src="https://cdn.vuetifyjs.com/images/cards/server-room.jpg"></v-img>
                                            </v-list-item-avatar>
                                            <div class="headline mb-2">Jubayer Ahmed</div>
                                        </v-card-text>

                                        <v-card-actions>
                                            <invite_dilog></invite_dilog>
                                        </v-card-actions>
                                    </v-card>
                                </v-col>

                            </v-card-text>
                        </v-card>
                    </v-tab-item>
                </v-tabs>
            </v-card>

        </v-card-text>

    </v-card>
</template>
<script>
    import invite_dilog from "./invite_dilog";
    import dilog from './Material_dilog.vue'

    export default {
        components: {dilog, invite_dilog},
        data() {
            return {
                tab: null,
                items: [
                    {
                        name: 'INFORMATION',
                        to: '/information',
                    },
                    {
                        name: 'ANNOUNCEMENTS',
                        to: '/announcement',

                    },
                    {
                        name: 'ASSIGNMENTS',
                        to: '/assignment',

                    },
                    {
                        name: 'STUDENTS',
                        to: '/student',

                    },
                    {
                        name: 'DISCUSSION',
                        to: '/discussion'
                    },

                ],
                desserts: [
                    {
                        name: 'Class Name:',
                        calories: 'Physics-107',
                    },
                    {
                        name: 'Section:',
                        calories: '1',
                    },
                    {
                        name: 'created on:',
                        calories: '20th Auugust 2019',
                    },
                    {
                        name: 'Class Code:',
                        calories: '7g58df41',
                    },


                ],

            }
        },
    }
</script>
<style>
    /* Helper classes */
    .basil {
        background-color: #b380ff !important;
    }

    .basil--text {
        color: white !important;
    }
</style>
