<template>
    <div>
        <v-dialog v-model="dialog" persistent max-width="600px">
            <template v-slot:activator="{ on }">
                <v-btn rounded v-on="on"  style="background-color: #3b5998;color:white;">Add Material</v-btn>
            </template>
            <v-card>
                <v-card-title>
                    <span class="headline">Create Class</span>
                </v-card-title>
                <v-card-text>
                    <v-container>

                        <v-select
                            :items="items"
                            label="Select Material"
                            v-model="material.option"
                        ></v-select>
                        <v-text-field label="Enter title*"  v-model="material.title" required ></v-text-field>

                        <v-textarea
                            label="Description"
                            v-model="material.body"
                        ></v-textarea>
                        <div class="form-group">
                            <h4>Add File:</h4>
                            <input type="file" @change="filechanged"   class="form-control form-control-lg" placeholder="Large form control">
                        </div>



                    </v-container>

                </v-card-text>
                <v-card-actions>
                    <div class="flex-grow-1"></div>
                    <v-btn style="background-color:#3b5998;color:white" text @click="dialog = false">Close</v-btn>
                    <v-btn style="background-color:#3b5998;color:white"  text  @click="send">Save</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
        {{user}}
        {{cheeckingX}}
    </div>
</template>

<script>
    export default {
        props:['data'],
        data: () => ({
            dialog: false,
            modal: false,
            menu2: false,
            items: ['Lesson', 'Document', 'Image', 'Audio','Video','Youtube','link'],
            material:{
                title:null,
                body:null,
                file:null,
                option:null,
                user_id:null,
                lmsclass_id:null,


            },
            x:0,
        }),
        methods:{
            filechanged(e){
                var fileReader=new FileReader();
                fileReader.readAsDataURL(e.target.files[0]);
                fileReader.onload = (e) => {
                    this.material.file=e.target.result
                }
            },
            send(){
              axios.post('/lms/api/material',this.material)
                  .then(res =>this.dialog=false,this.$toasted.show('Material Created',{type:'success'}),
                      EventBus.$emit('newMaterial',this.material)
                  )
                this.x=0;
            },
        },
        computed:{
            cheeckingX()
            {
                if (this.x==0){
                    this.material={};
                    this.x=1;
                }
            },
            user(){
                this.material.user_id=User.id();
                this.material.lmsclass_id=this.data;
            }
        }
    }
</script>
