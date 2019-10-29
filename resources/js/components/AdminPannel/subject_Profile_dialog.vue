<template>

        <v-dialog max-width="400px" persistent v-model="dialog">
            <template v-slot:activator="{ on }">
                <v-btn small depressed style="background-color: #3b5998;color: white;" v-on="on">Profile</v-btn>
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

                            Subject information

                        </v-tab>
                    </v-tabs>
                        <div
                            class="text-center"

                        >

                            <v-card-text>
                                <v-simple-table >
                                    <tbody v-for="data in datas" align="left">
                                    <tr  >
                                        <td class="font-weight-black">Name:</td>
                                        <td class="black--text text-capitalize">{{data.name}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-black">Section:</td>
                                        <td class="black--text text-capitalize">{{data.section}}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-black">Teacher's Name:</td>
                                        <td v-if="data.teacher_name!=null" class="black--text text-capitalize">{{data.teacher_name}}</td>
                                        <td v-else class="black--text text-capitalize">Not Assigned yet</td>

                                    </tr>
                                    <tr>
                                        <td class="font-weight-black">Class Name:</td>
                                        <td class="black--text text-capitalize">{{data.class_name}}</td>
                                    </tr>

                                    </tbody>
                                </v-simple-table>

                            </v-card-text>
                        </div>

                </v-card>

                <v-card-actions>
                    <div class="flex-grow-1"></div>
                    <v-btn  style="background-color:#3b5998;color:white" text @click="dialog = false">Close</v-btn>
                    <v-btn style="background-color:#3b5998;color:white;text-transform: none"  text @click="dialog = false">Enter Class Room</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>

</template>
<script>
    export default {
        props:['datas'],
        data: () => ({
            dialog: false,

        }),
    }
</script>
