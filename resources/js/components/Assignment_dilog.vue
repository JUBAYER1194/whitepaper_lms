<template>
    <div>
        <v-dialog v-model="dialog" persistent max-width="600px">
            <template v-slot:activator="{ on }">
                <v-btn v-on="on" style="float: right;margin-right:5%;color: white;background-color: #9652ff;"><v-icon>add</v-icon></v-btn>
            </template>
            <v-card>
                <v-card-title>
                    <span class="headline" style="color: white;background-color: #9652ff;">Create Assignment</span>
                </v-card-title>
                <v-card-text>
                    <v-container>
                        <v-text-field label="Title:*"  required ></v-text-field>
                        <v-textarea
                            label="Description"
                        ></v-textarea>
                        <v-file-input show-size counter multiple label="File input"></v-file-input>

                        <v-menu
                            v-model="menu2"
                            :close-on-content-click="false"
                            :nudge-right="40"
                            transition="scale-transition"
                            offset-y
                            full-width
                            min-width="240px"

                        >
                            <template v-slot:activator="{ on }">
                                <v-text-field
                                    v-model="date"
                                    label="start date"
                                    prepend-icon="event"
                                    readonly
                                    v-on="on"
                                ></v-text-field>
                            </template>
                            <v-date-picker v-model="date" @input="menu2 = false" color="#9652ff"></v-date-picker>
                        </v-menu>


                    </v-container>

                </v-card-text>
                <v-card-actions>
                    <div class="flex-grow-1"></div>
                    <v-btn style="background-color:#9652ff;color:white" text @click="dialog = false">Close</v-btn>
                    <v-btn style="background-color:#9652ff;color:white"  text @click="dialog = false">Send</v-btn>
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
