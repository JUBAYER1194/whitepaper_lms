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
            <v-card-title class="align-end fill-height">{{classes.name}}</v-card-title>
        </v-img>

        <v-card-text>
            <v-card>
                <v-tabs
                    flat
                    grow
                >
                    <v-tab>
                        <v-icon left>mdi-account</v-icon>
                        Class Information
                    </v-tab>
                    <v-tab @click="created">
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
                                max-width="100%"
                        >
                            <v-card-text>
                                <v-simple-table>
                                    <tbody>
                                    <tr>
                                        <td class="font-weight-black"> Class Name:</td>
                                        <td class="black--text text-capitalize"> {{classes.name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-black">Section:</td>
                                        <td class="black--text text-capitalize">{{classes.section}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-black">Description:</td>
                                        <td class="black--text text-capitalize">{{classes.description}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-black"> Faculty Name:</td>
                                        <td class="black--text text-capitalize" >{{classes.first_name}} {{classes.last_name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-black">Code:</td>
                                        <td class="black--text">{{classes.code}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-black">Create At:</td>
                                        <td class="black--text">{{classes.created_at}}</td>
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
                                <dilog :data="classes.id"></dilog>
                            </v-card-text>

                            <v-card-text>

                                <v-row >
                                    <v-col
                                        cols="12"
                                        md="4"
                                        v-for="material in materials"
                                        :key="material.user_id"
                                    >
                                        <v-card
                                            class="mx-auto"
                                            max-width="100%"

                                        >
                                            <v-list-item three-line>
                                                <v-list-item-content>
                                                    <div class="overline mb-4">{{material.option}}</div>
                                                    <v-list-item-title class="headline mb-1">{{material.title}}
                                                    </v-list-item-title>
                                                    <v-list-item-subtitle>{{material.body}}</v-list-item-subtitle>
                                                    <v-list-item-subtitle>{{material.created_at}}</v-list-item-subtitle>
                                                </v-list-item-content>
                                            </v-list-item>

                                            <v-card-actions>

                                                <v-row class="d-flex">
                                                    <v-col
                                                        md="4"
                                                    >
                                                        <v-btn style="color: white;background-color:#9652ff" depressed>Click</v-btn>
                                                    </v-col>
                                                    <v-col
                                                        md="4"
                                                    >
                                                        <EditMaterialdilog :data="material"></EditMaterialdilog>

                                                    </v-col>
                                                    <v-col
                                                        md="4"
                                                    >
                                                        <v-btn class="error"  depressed>Delete</v-btn>
                                                    </v-col>
                                                </v-row>

                                            </v-card-actions>
                                        </v-card>
                                    </v-col>
                                </v-row>


                            </v-card-text>
                        </v-card>
                    </v-tab-item>
                    <v-tab-item>
                        <v-card class="mx-auto" flat
                                max-width="100%"

                        >
                            <v-card-text>

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


                            </v-card-text>
                        </v-card>
                    </v-tab-item>
                </v-tabs>
            </v-card>

        </v-card-text>
          {{created}}
          {{getMaterial}}
    </v-card>
</template>
<script>
    import invite_dilog from "./invite_dilog";
    import dilog from './Material_dilog.vue'
    import EditMaterialdilog from "./EditMaterialdilog.vue";

    export default {
        props:['data','datas'],
        components: {dilog, invite_dilog,EditMaterialdilog},
        data() {
            return {
                tab: null,
                classes:{},
                materials:{},
                x:null,
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


            }
        },

        computed:{
            created() {
                this.classes=this.data;
            },
            getMaterial(){
                this.materials=this.datas;
            }
        },
        methods:{

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
