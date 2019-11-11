<template>

        <v-dialog v-model="dialog" persistent max-width="400px">
            <template v-slot:activator="{ on }">
                <h5 v-on="on" style="color:#3b5998">Forgotten account?</h5>
            </template>
            <v-card>
                <v-card-title>
                    <span class="headline">Reset PassWord</span>
                </v-card-title>
                <v-card-text>
                    <v-container>
                        <v-row>
                            <v-col cols="12">

                                <v-text-field
                                    outlined
                                    rounded
                                    label="Enter Your Email Address*"
                                    required>

                                </v-text-field>
                            </v-col>

                        </v-row>
                    </v-container>
                    <small>*indicates required field</small>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn depressed style="background-color:#3b5998;color: white;"  text @click="dialog = false">Close</v-btn>
                    <v-btn depressed style="background-color:#3b5998;color: white;" text @click="dialog = false">Save</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
</template>
<script>
    export default {
        data: () => ({
            dialog: false,
        }),
    }
</script>
