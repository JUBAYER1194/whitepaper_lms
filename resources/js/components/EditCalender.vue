<template>
    <v-row style="margin-left:.25%">
        <v-dialog max-width="600px" persistent v-model="dialog">
            <template v-slot:activator="{ on }">
                <v-btn v-on="on" icon>
                    <v-icon>mdi-pencil</v-icon>
                </v-btn>
            </template>
            <v-card>
                <v-card-title>
                    <span class="headline">Edit Event</span>
                </v-card-title>
                <v-card-text>
                    <v-container>
                        <v-row>
                            <v-col cols="12" sm="6">
                                <v-text-field
                                    label="Event Name*"
                                    outlined
                                    v-model="event.name"
                                ></v-text-field>
                            </v-col>
                            <v-col cols="12" sm="6">
                                <v-textarea
                                    label="Event Details"
                                    outlined
                                    rows="1"
                                    v-model="event.details"
                                ></v-textarea>
                            </v-col>
                            <v-col cols="12" sm="6">
                                <v-select
                                    :items="colors"
                                    label="Event Color*"
                                    item-text="name"
                                    item-value="name"
                                    outlined
                                    v-model="event.color"
                                ></v-select>
                            </v-col>
                            <v-col cols="12" sm="6">
                                <v-dialog
                                    ref="dialogs"
                                    v-model="modal"
                                    :return-value.sync="start_date"
                                    persistent
                                    width="290px"
                                >
                                    <template v-slot:activator="{ on }">
                                        <v-text-field
                                            v-model="start_date"
                                            label="Event Start Date*"
                                            prepend-icon="event"
                                            readonly
                                            v-on="on"
                                        ></v-text-field>
                                    </template>
                                    <v-date-picker v-model="start_date" scrollable>
                                        <v-spacer></v-spacer>
                                        <v-btn text color="primary" @click="modal = false">Cancel</v-btn>
                                        <v-btn text color="primary" @click="$refs.dialogs.save(start_date)">OK</v-btn>
                                    </v-date-picker>
                                </v-dialog>
                            </v-col>
                            <v-col cols="12" sm="6">
                                <v-menu
                                    ref="menus"
                                    v-model="menu2"
                                    :close-on-content-click="false"
                                    :nudge-right="40"
                                    :return-value.sync="start_time"
                                    transition="scale-transition"
                                    offset-y
                                    max-width="290px"
                                    min-width="290px"
                                >
                                    <template v-slot:activator="{ on }">
                                        <v-text-field
                                            v-model="start_time"
                                            label="Event Start Time*"
                                            prepend-icon="access_time"
                                            readonly
                                            v-on="on"
                                        ></v-text-field>
                                    </template>
                                    <v-time-picker
                                        v-if="menu2"
                                        v-model="start_time"
                                        full-width
                                        @click:minute="$refs.menus.save(start_time)"
                                    ></v-time-picker>
                                </v-menu>
                            </v-col>
                            <v-col cols="12" sm="6">
                                <v-dialog
                                    ref="dialog"
                                    v-model="modal2"
                                    :return-value.sync="end_date"
                                    persistent
                                    width="290px"
                                >
                                    <template v-slot:activator="{ on }">
                                        <v-text-field
                                            v-model="end_date"
                                            label="Event End Date*"
                                            prepend-icon="event"
                                            readonly
                                            v-on="on"
                                        ></v-text-field>
                                    </template>
                                    <v-date-picker v-model="end_date" scrollable>
                                        <v-spacer></v-spacer>
                                        <v-btn text color="primary" @click="modal2 = false">Cancel</v-btn>
                                        <v-btn text color="primary" @click="$refs.dialog.save(end_date)">OK</v-btn>
                                    </v-date-picker>
                                </v-dialog>
                            </v-col>
                            <v-col cols="12" sm="6">
                                <v-menu
                                    ref="menu"
                                    v-model="menu3"
                                    :close-on-content-click="false"
                                    :nudge-right="40"
                                    :return-value.sync="end_time"
                                    transition="scale-transition"
                                    offset-y
                                    max-width="290px"
                                    min-width="290px"
                                >
                                    <template v-slot:activator="{ on }">
                                        <v-text-field
                                            v-model="end_time"
                                            label="Event End Time*"
                                            prepend-icon="access_time"
                                            readonly
                                            v-on="on"
                                        ></v-text-field>
                                    </template>
                                    <v-time-picker
                                        v-if="menu3"
                                        v-model="end_time"
                                        full-width
                                        @click:minute="$refs.menu.save(end_time)"
                                    ></v-time-picker>
                                </v-menu>
                            </v-col>





                        </v-row>
                    </v-container>
                    <small>*indicates required field</small>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn @click="dialog = false" color="blue darken-1" text>Close</v-btn>
                    <v-btn @click="send" color="blue darken-1" text>Save</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
        {{gettingStart_EndTime}}
        {{gettingEvent}}
    </v-row>
</template>
<script>
    export default {
        props:['data'],
        data: () => ({
            dialog: false,
            menu2: false,
            menu3: false,
            modal: false,
            modal2: false,
            event:{
                id:null,
                name: null,
                details: null,
                start: null,
                end: null,
                color: null,
            },
            start_date:null,
            start_time:null,
            end_date:null,
            end_time:null,
            colors: [
                {
                    name: 'blue',

                },
                {
                    name: 'indigo',


                },
                {
                    name: 'deep-purple',


                },
                {
                    name: 'cyan',


                },
                {
                    name: 'red',

                },
                {
                    name:'brown',
                },
                {
                    name:'deep-orange',
                },
                {
                    name:'teal',
                },
                {
                    name:'grey darken-1',
                },
                {
                    name:'black',
                },



            ],



        }),

        computed:{
            gettingStart_EndTime(){
                this.event.start=this.start_date+' '+this.start_time;
                this.event.end=this.end_date+' '+this.end_time;

            },
            gettingEvent(){
                this.event=this.data;
            }
        },
        methods:{
            send(){
                axios.patch(`/lms/api/allevent/${this.event.id}`,this.event)
                    .then(res =>this.dialog=false,this.$toasted.show('Event Edited',{type:'success'}),

                    )
                window.location.reload()
            }


        }


    }
</script>
