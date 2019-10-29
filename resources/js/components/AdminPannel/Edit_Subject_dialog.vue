<template>

    <v-dialog v-model="dialog" persistent max-width="600px">
        <template v-slot:activator="{ on }">
            <v-btn small v-on="on" depressed width="60"  class="primary mx-lg-6 my-3">Edit</v-btn>
        </template>
        <v-card>
            <v-card-title>
                <span style="color: #3b5998" class="headline">Edit Subject</span>
            </v-card-title>
            <v-card-text>
                <v-container>
                    <v-row>
                        <v-col cols="12" sm="12" md="6">

                            <v-text-field outlined rounded label="Subject Name*" v-model="subject.name" required></v-text-field>
                        </v-col>
                        <v-col cols="12" sm="12" md="6">
                            <v-text-field  label="Section*" outlined rounded  required v-model="subject.section" ></v-text-field>
                        </v-col>
                        <v-col cols="12" sm="12" md="6">
                            <v-select
                                outlined
                                rounded
                                :items="item"
                                label="Select Status"
                                item-text="name"
                                item-value="id"
                                v-model="subject.status"
                            >

                            </v-select>
                        </v-col>
                        <v-col cols="12" sm="12" md="6">
                            <v-select
                                outlined
                                rounded
                                :items="datah"
                                label="Select Class"
                                item-text="name"
                                item-value="id"
                                v-model="subject.class_id"
                            >

                            </v-select>
                        </v-col>
                        <v-col cols="12" sm="12" md="12">
                            <v-textarea
                                outlined
                                rounded
                                label="Description"
                                v-model="subject.description"
                            ></v-textarea>
                        </v-col>
                    </v-row>

                </v-container>

            </v-card-text>
            <v-card-actions>
                <div class="flex-grow-1"></div>
                <v-btn style="background-color:#3b5998;color:white" text @click="dialog = false">Close</v-btn>
                <v-btn style="background-color:#3b5998;color:white"  text @click="EditSubject">Save</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>


</template>

<script>
    export default {
        props:['datah','subject'],
        data: () => ({
            dialog: false,
            modal: false,
            menu2: false,
            item:[
                {'id':1,'name':'Active'},
                {'id':0,'name':'In-Active'}
            ],
        }),
        computed:{


        },
        methods:{
            EditSubject(){
                axios.patch(`/lms/api/class/${this.subject.id}`,this.subject)
                    .then(res =>this.dialog=false,this.$toasted.show('Subject Edited',{type:'success'}),
                    )
            }
        },
    }
</script>
