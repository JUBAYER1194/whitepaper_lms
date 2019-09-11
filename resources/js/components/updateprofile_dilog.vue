<template>
    <div>
        <v-dialog v-model="dialog" persistent max-width="600px">
            <template v-slot:activator="{ on }">
                <v-list-item-subtitle v-on="on" style="color: darkred">Update your profile</v-list-item-subtitle>
            </template>
            <v-card>
                <v-card-title>
                    <span class="headline" style="color: white;background-color: #9652ff;"> Update Profile</span>
                </v-card-title>
                <v-card-text>
                    <v-container>
                        <v-text-field label="Full Name:*"  required ></v-text-field>
                        <v-text-field label="Email:*"  required ></v-text-field>
                        <v-text-field label="Phone No:*"  required ></v-text-field>
                        <v-text-field label="Address:*"  required ></v-text-field>
                        <v-text-field label="Nid:*"  required ></v-text-field>

                        <v-file-input show-size counter multiple label="Upload Profile picture"></v-file-input>




                    </v-container>

                </v-card-text>
                <v-card-actions>
                    <div class="flex-grow-1"></div>
                    <v-btn style="background-color:#9652ff;color:white" text @click="dialog = false">Close</v-btn>
                    <v-btn style="background-color:#9652ff;color:white"  text @click="dialog = false">Update</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </div>
</template>

<script>
    export default {
        data: () => ({
            dialog: false,
            date: new Date().toISOString().substr(0, 10),
            menu: false,
            modal: false,
            menu2: false,
        }),
    }
</script>
