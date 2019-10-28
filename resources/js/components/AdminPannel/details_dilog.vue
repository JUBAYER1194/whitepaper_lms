<template>
    <v-row justify="center">
        <v-dialog max-width="600px" persistent v-model="dialog">
            <template v-slot:activator="{ on }">
                <v-btn depressed style="background-color: #3b5998;color: white;" v-on="on">Profile</v-btn>
            </template>
            <v-card

            >

                <v-card

                    max-width="100%"
                    tile
                    width="100%"
                    flat

                >
                    <v-tabs
                        center-active color="grey lighten-2"
                        flat
                        grow
                    >

                        <v-tab

                            outlined
                            style="font-size:1em;background-color:#3b5998;color: white;"
                            tile


                        >

                            User information

                        </v-tab>
                    </v-tabs>
                    <v-row>
                        <v-col
                            class="text-center d-flex"
                            cols="12"
                            md="5"


                        >

                            <v-img
                            >
                                        <v-avatar
                                            color="grey"
                                            size="200"
                                            tile
                                            rounded
                                            style="margin-left:10%;border-radius:5%;"
                                        >
                                            <v-img
                                                src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                                        </v-avatar>

                            </v-img>
                        </v-col>
                        <v-col
                            class="text-center d-flex"
                            md="7"
                            cols="12"
                        >

                            <v-card-text>
                                <v-simple-table >
                                    <tbody>
                                    <tr>
                                        <td class="font-weight-black">Name:</td>
                                        <td class="black--text text-capitalize">Jubayer Ahmed</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-black">Role:</td>
                                        <td class="black--text text-capitalize">Student</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-black">Phone:</td>
                                        <td class="black--text text-capitalize">01766363513</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-black">Email:</td>
                                        <td class="black--text">ahmedjubayer54@gmail.com</td>
                                    </tr>




                                    </tbody>
                                </v-simple-table>

                            </v-card-text>
                        </v-col>
                    </v-row>
                </v-card>

                <v-card-actions>
                    <div class="flex-grow-1"></div>
                    <v-btn  style="background-color:#3b5998;color:white" text @click="dialog = false">Close</v-btn>
                    <v-btn style="background-color:#3b5998;color:white;text-transform: none"  text @click="dialog = false">Enter Profile</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-row>
</template>
<script>
    export default {
        data: () => ({
            dialog: false,

        }),
    }
</script>
