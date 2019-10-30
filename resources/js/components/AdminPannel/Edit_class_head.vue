<template>

        <v-dialog  v-model="dialog" persistent max-width="600px">
            <template v-slot:activator="{ on }">
                <v-btn class="primary mx-lg-6 my-3" depressed small v-on="on" width="80">Edit</v-btn>
            </template>
            <v-card>
                <v-card-title>
                    <span class="headline" style="color:#3b5998">Edit Class</span>
                </v-card-title>
                <v-card-text>
                    <v-container>
                        <v-row>
                            <v-col cols="12" sm="12" md="6">
                                <v-text-field rounded outlined label="Class Name*" v-model="data.name" required></v-text-field>
                            </v-col>
                            <v-col cols="12" sm="12" md="6">
                                <v-select
                                    :items="item"
                                    label="Select Status"
                                    item-text="name"
                                    item-value="id"
                                    outlined
                                    rounded
                                    v-model="data.status"
                                >

                                </v-select>
                            </v-col>
                        </v-row>
                    </v-container>
                    <small>*indicates required field</small>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn style="background-color:#3b5998;color:white" text @click="dialog = false">Close</v-btn>
                    <v-btn style="background-color:#3b5998;color:white;text-transform: none" text @click="CreateClassHead">Save</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>

</template>
<script>
    export default {
        props:['data'],
        data: () => ({
            dialog: false,
            item:[
                {'id':1,'name':'Active'},
                {'id':0,'name':'In-Active'}
            ],
            form:{
                name:null,
                status:null,
            }
        }),
        methods:{
            CreateClassHead()
            {
                axios.patch(`/lms/api/class-head/${this.data.id}`,this.data)
                    .then(res =>this.dialog=false,this.$toasted.show('Class Edited',{type:'success'}),
                    )
            },

        },

    }
</script>
