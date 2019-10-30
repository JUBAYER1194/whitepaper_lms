<template>

    <v-dialog  v-model="dialog" persistent max-width="600px">
        <template v-slot:activator="{ on }">
            <v-btn v-on="on" small width="70" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
        </template>
        <v-card>
            <v-card-title>
                <span style="color:#3b5998;" class="headline">Assign Class/Subject</span>
            </v-card-title>
            <v-card-text>
                <v-container>
                    <v-row>


                        <v-col cols="12" sm="12" md="6">
                            <v-select
                                :items="dataH"
                                label="Select Class"
                                item-text="name"
                                item-value="id"
                                outlined
                                rounded
                                v-model="form.classHead"
                            >

                            </v-select>
                        </v-col>
                        <v-col cols="12" sm="12" md="6">
                            <v-select
                                v-model="form.subject"
                                :items="datafld"
                                chips
                                item-text="name"
                                item-value="id"
                                label="Select Subject"
                                multiple
                                rounded
                                outlined
                            ></v-select>
                        </v-col>

                    </v-row>
                </v-container>
                <small>*indicates required field</small>
            </v-card-text>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn style="background-color:#3b5998;color:white" text @click="dialog = false">Close</v-btn>
                <v-btn style="background-color:#3b5998;color:white;text-transform: none" text @click="Assign_ClassRoom">Save</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>

</template>
<script>
    export default {
        props: ['data','dataH','datafld'],
        data: () => ({
            dialog: false,
            form:{
                classHead:null,
                subject:null,
            }
        }),
        methods:{
            Assign_ClassRoom()
            {
                axios.post(`/lms/api/student/assign_c_s/${this.data.id}`,this.form)
                    .then(res =>this.dialog=false,this.$toasted.show('Assigned',{type:'success'}),
                    )
            },

        }
    }
</script>
