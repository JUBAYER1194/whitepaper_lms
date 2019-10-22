<template>

    <v-container class="grey lighten-4" style="padding-bottom:15%;">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->


        <v-card

            max-width="100%"
            tile
            width="100%"
            flat

        >

            <v-card-title
                class="white--text justify-center font-weight-bold"
                style="font-size: 1.3em;background-color: #9652ff;padding-bottom: 1.5%;"
            >

                Profile Information

            </v-card-title>
            <v-row class="d-flex" style="margin-bottom: 5%">
                <v-col
                    class="d-flex"
                    md="3"
                    style="padding-bottom: 23%;padding-top: 4%"
                >

                    <v-img
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
                                    color="grey"
                                    size="200"
                                    tile
                                    rounded
                                    style="margin-left:10%;border-radius:5%;"
                                >
                                    <v-img
                                        :src="'http://127.0.0.1:8000/uploads/x/x/profile/'+ form.image"></v-img>
                                </v-avatar>
                            </v-col>
                            <v-col
                                cols="12"
                                class="py-0"
                            >
                                <v-list-item
                                    style="color: #0d47a1"
                                >
                                    <v-list-item-content class="title" style="margin-left:17%;">
                                        <dilog :data="form"></dilog>
                                    </v-list-item-content>
                                </v-list-item>
                            </v-col>
                        </v-row>
                    </v-img>


                </v-col>
                <v-col
                    class="d-flex"
                    md="8"
                >

                    <v-card-text>
                        <v-simple-table >
                            <tbody>
                            <tr>
                                <td class="font-weight-black">Name:</td>
                                <td class="black--text text-capitalize">{{form.first_name}} {{form.last_name}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Role:</td>
                                <td class="black--text text-capitalize">{{form.role}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Phone:</td>
                                <td class="black--text text-capitalize">{{form.phone}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Email:</td>
                                <td class="black--text">{{form.email}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Nid:</td>
                                <td class="black--text text-capitalize">{{form.nid}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Class Teacher’s Name:</td>
                                <td class="black--text text-capitalize">{{form.class_teacher_name}}</td>
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
                                <td class="font-weight-black">Parent’s Contact:</td>
                                <td class="black--text text-capitalize">{{form.parents_contact}}</td>
                            </tr>
                            <tr>
                                <td class="font-weight-black">Address:</td>
                                <td class="black--text  text-capitalize">{{form.address}}</td>
                            </tr>



                            </tbody>
                        </v-simple-table>

                    </v-card-text>
                </v-col>
            </v-row>
        </v-card>


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
