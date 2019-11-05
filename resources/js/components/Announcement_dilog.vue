<template>
    <div>
        <v-dialog v-model="dialog" persistent max-width="600px">
            <template v-slot:activator="{ on }">
                <v-btn rounded depressed   v-on="on" style="float: right;margin-right:5%;color: white;background-color:#3b5998"><v-icon>add</v-icon></v-btn>
            </template>
            <v-card>
                <v-card-title>
                    <span class="headline" style="color:#3b5998;">Create Announcement</span>
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

                    <v-btn style="background-color:#3b5998;color:white" text @click="save">Save</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
        {{user}}
        {{lmsclassid}}
        {{cheeckingX}}
    </div>
</template>

<script>
    export default {
        props:['data'],


        data: () => ({
            dialog: false,
            announcement:{
                title:null,
                body:null,
                user_id:null,
                lmsclass_id:null,


            },
            x:0,

        }),
        // created(){
        //     this.listen();
        // },
        computed:{
            cheeckingX()
            {
                if (this.x==0){
                    this.announcement={};
                    this.x=1;
                }
            },
            user(){
                this.announcement.user_id=User.id();
            },
             lmsclassid(){
               this.announcement.lmsclass_id=this.data;
             },

        },
        methods:{
            save(){
                axios.post('/lms/api/announcement',this.announcement)
                    .then(res =>this.dialog=false,this.$toasted.show('Announcement Created',{type:'success'}),
                        EventBus.$emit('newAnn',this.announcement)
                    )
                this.x=0
            },


        }
    }
</script>
