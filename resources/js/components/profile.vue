<template>
    <v-container class="grey lighten-5">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <v-row>
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
                                        <v-list-item-title class="title">Marcus Obrien</v-list-item-title>
                                        <v-list-item-subtitle>Network Engineer</v-list-item-subtitle>
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
                            <div class="display-0 text--primary">FullName:    </div>
                            <br>
                            <div class="display-0 text--primary">Email:    </div>
                            <br>
                            <div class="display-0 text--primary">Phone No:    </div>
                            <br>
                            <div class="display-0 text--primary">Address:    </div>
                            <br>
                            <div class="display-0 text--primary">NID:    </div>
                            <br>
                            <div class="display-0 text--primary">FullName:    </div>
                            <br>
                            <div class="display-0 text--primary">FullName:    </div>
                            <br>

                        </v-card-text>

                    </v-card>

            </v-col>
        </v-row>

        <v-row>
            <v-col
                cols="12"
                md="12"
            >
                <v-layout row wrap>
                    <v-flex xs12 sm6 md4 lg3 v-for="person in team" :key="person.name">
                        <v-card flat class="text-xs-center ma-3">
                            <v-responsive class="pt-4">
                                <v-avatar size="100" class="grey lighten-2">
                                    <img :src="person.avatar">
                                </v-avatar>
                            </v-responsive>
                            <v-card-text>
                                <div class="subheading">{{ person.name }}</div>
                                <div class="grey--text">{{ person.role }}</div>
                            </v-card-text>
                            <v-card-actions>
                                <v-btn flat color="grey">
                                    <v-icon small left>message</v-icon>
                                    <span class="">Message</span>
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>

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

                ]
            }
        }
    }
</script>
