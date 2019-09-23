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
                                    <v-img :src="'http://127.0.0.1:8000/uploads/x/profile/'+ form.image"></v-img>
                                </v-avatar>
                            </v-col>
                            <v-col class="py-0">
                                <v-list-item
                                    style="color: #0d47a1"
                                >
                                    <v-list-item-content>
                                        <v-list-item-title class="title text-capitalize">{{form.first_name}}  {{form.last_name}}</v-list-item-title>
                                        <v-list-item-subtitle style="padding-bottom:5%">{{form.role}}</v-list-item-subtitle>
                                        <dilog :data="form"></dilog>
                                    </v-list-item-content>
                                </v-list-item>
                            </v-col>
                        </v-row>
                    </v-img>
                </v-card>

            </v-col>
            <v-col
                cols="12"
                md="8"
            >

                <v-card
                    class="mx-auto"
                    max-width="800"
                    til
                >
                    <v-card-text>
                        <v-simple-table>
                            <thead>
                            <tr>
                                <th style="background-color: #9652ff"></th>
                                <th
                                    class="white--text"
                                    style="font-size: large;background-color: #9652ff;"


                                >
                                    Profile Information
                                </th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="font-weight-black">Name:</td>
                                <td class="black--text text-capitalize">{{form.first_name}} {{form.last_name}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black ">Father’s Name:</td>
                                <td class="black--text text-capitalize">{{form.father_name}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Mother’s Name:</td>
                                <td class="black--text text-capitalize">{{form.mother_name}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Address:</td>
                                <td class="black--text  text-capitalize">{{form.address}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Email:</td>
                                <td class="black--text">{{form.email}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Phone:</td>
                                <td class="black--text text-capitalize">{{form.phone}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Class Teacher’s Name:</td>
                                <td class="black--text text-capitalize">{{form.class_teacher_name}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Parent’s Contact:</td>
                                <td class="black--text text-capitalize">{{form.parents_contact}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Nid:</td>
                                <td class="black--text text-capitalize">{{form.nid}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Role:</td>
                                <td class="black--text text-capitalize">{{form.role}}</td>
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
                            <v-list-item-title class="headline mb-1">
                                Physics
                            </v-list-item-title>
                            <v-list-item-subtitle>section:10</v-list-item-subtitle>
                        </v-list-item-content>

                        <v-list-item-avatar
                            color="#9652ff"
                            size="80"
                            tile
                        ></v-list-item-avatar>
                    </v-list-item>

                    <v-card-actions>
                        <v-btn href="/class" style="color: white;background-color:#9652ff">
                            go to the class

                        </v-btn>
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
    import Class from "./Class.vue";

    export default {
        components: {dilog, Class},
        data() {
            return {
                form:{},

            }
        },
        created() {
            axios.get(`/lms/api/information/1`)
                .then(res=>this.form =res.data.data)
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
