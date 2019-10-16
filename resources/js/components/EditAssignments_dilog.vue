<template>
    <div>
        <v-dialog v-model="dialog" persistent max-width="600px">
            <template v-slot:activator="{ on }">
                <v-btn v-on="on" color="primary" depressed>Edit</v-btn>
            </template>
            <v-card>
                <v-card-title>
                    <span class="headline" style="color:#9652ff;">Edit Assignment</span>
                </v-card-title>
                <v-card-text>
                    <v-container>
                        <v-text-field v-model="assignment.title" label="Title:*"  required ></v-text-field>
                        <v-textarea
                            label="Description"
                            v-model="assignment.body"
                        ></v-textarea>
                        <div>
                            <v-dialog
                                ref="dialog"
                                v-model="modal"
                                :return-value.sync="assignment.deadline"
                                persistent
                                width="290px"
                            >
                                <template v-slot:activator="{ on }">
                                    <v-text-field
                                        v-model="assignment.deadline"
                                        label="Deadline"
                                        prepend-icon="event"
                                        readonly
                                        v-on="on"
                                    ></v-text-field>
                                </template>
                                <v-date-picker v-model="assignment.deadline" scrollable>
                                    <v-spacer></v-spacer>
                                    <v-btn text color="primary" @click="modal = false">Cancel</v-btn>
                                    <v-btn text color="primary" @click="$refs.dialog.save(assignment.deadline)">OK</v-btn>
                                </v-date-picker>
                            </v-dialog>
                        </div>
                        <div class="form-group">
                            <h4>Add File:</h4>
                            <input type="file" @change="filechanged"   class="form-control form-control-lg" placeholder="Large form control">
                        </div>



                    </v-container>

                </v-card-text>
                <v-card-actions>
                    <div class="flex-grow-1"></div>
                    <v-btn style="background-color:#9652ff;color:white" text @click="dialog = false">Close</v-btn>
                    <v-btn style="background-color:#9652ff;color:white"  text @click="update">Send</v-btn>
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
            assignment:{},

        }),
        computed:{
            getting(){
                this.assignment=this.data;
            }
        },
        methods:{
            update(){
                axios.patch(`/lms/api/class/assignment/${this.assignment.id}`,this.assignment)
                    .then(res=> this.dialog=false,this.$toasted.show('Assignment Updated',{type:'success'}))
            },
            filechanged(e){
                var fileReader=new FileReader();
                fileReader.readAsDataURL(e.target.files[0]);
                fileReader.onload = (e) => {
                    this.assignment.file=e.target.result
                }
            },
        }
    }
</script>
