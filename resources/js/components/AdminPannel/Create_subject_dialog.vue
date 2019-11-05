<template>

    <v-dialog v-model="dialog" persistent max-width="600px">
        <template v-slot:activator="{ on }">
            <v-btn v-on="on" depressed rounded style="background-color: #3b5998;color: white">Create Subject</v-btn>
        </template>
        <v-card>
            <v-card-title>
                <span style="color: #3b5998" class="headline">Create Subject</span>
            </v-card-title>
            <v-card-text>
                <v-container>
                    <v-row>
                        <v-col cols="12" sm="12" md="6">

                            <v-text-field outlined rounded label="Subject Name*" v-model="classes.name" required></v-text-field>
                        </v-col>
                            <v-col cols="12" sm="12" md="6">
                            <v-text-field  label="Section*" outlined rounded  required v-model="classes.section" ></v-text-field>
                            </v-col>
                        <v-col cols="12" sm="12" md="6">
                            <v-select
                                outlined
                                rounded
                                :items="item"
                                label="Select Status"
                                item-text="name"
                                item-value="id"
                                v-model="classes.status"
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
                                v-model="classes.class_head"
                            >

                            </v-select>
                        </v-col>
                                <v-col cols="12" sm="12" md="12">
                            <v-textarea
                                outlined
                                rounded
                                label="Description"
                                v-model="classes.description"
                            ></v-textarea>
                                </v-col>
                    </v-row>

                </v-container>

            </v-card-text>
            <v-card-actions>
                <div class="flex-grow-1"></div>
                <v-btn style="background-color:#3b5998;color:white" text @click="dialog = false">Close</v-btn>
                <v-btn style="background-color:#3b5998;color:white"  text @click="create">Save</v-btn>
            </v-card-actions>
        </v-card>
        {{userId}}
        {{cheeckingX}}
    </v-dialog>


</template>

<script>
    export default {
        props:['datah'],
        data: () => ({
            dialog: false,
            modal: false,
            menu2: false,
            classes:{
                name:null,
                section:null,
                description:null,
                status:null,
                user_id:null,
                class_head:null,

            },
            x:0,
            item:[
                {'id':1,'name':'Active'},
                {'id':0,'name':'In-Active'}
            ],
        }),

        computed:{
            userId(){
                this.classes.user_id=User.id();
            },
            cheeckingX()
            {
                if (this.x==0){
                    this.classes={};
                    this.x=1;
                }
            },


        },
        methods:{
          create(){
              axios.post(`/lms/api/class`,this.classes)
                  .then(res =>EventBus.$emit('newSubject',this.classes),this.dialog=false,this.$toasted.show('Subject Created',{type:'success'}))
                  this.x=0
          },
        },
    }
</script>
