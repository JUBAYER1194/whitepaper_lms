<template>
    <div>
        <v-dialog v-model="dialog" persistent max-width="600px">
            <template v-slot:activator="{ on }">
                <v-btn width="80" v-on="on" color="primary" depressed>Edit</v-btn>
            </template>
            <v-card>
                <v-card-title>
                    <h3 class="headline" style="color:#3b5998;">Edit Announcement</h3>
                </v-card-title>
                <v-card-text>
                    <v-container>
                        <v-text-field label="Title:*" v-model="announcement.title"  required ></v-text-field>
                        <v-textarea
                            label="Description"
                            v-model="announcement.body"
                        ></v-textarea>




                    </v-container>

                </v-card-text>
                <v-card-actions>
                    <div class="flex-grow-1"></div>
                    <v-btn style="background-color:#3b5998;color:white"  text @click="dialog = false">Close</v-btn>
                    <v-btn style="background-color:#3b5998;color:white" text @click="update">Save</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
        {{getting}}
    </div>
</template>

<script>
    export default {
        props:['data'],
        data: () => ({
            dialog: false,
            announcement:{},

        }),
        computed:{
            getting(){
                this.announcement=this.data;
            }
        },
        methods:{
            update(){
                axios.patch(`/lms/api/announcement/${this.announcement.id}`,this.announcement)
                    .then(res=> this.dialog=false,this.$toasted.show('Announcement Updated',{type:'success'}))
            }
        }
    }
</script>
