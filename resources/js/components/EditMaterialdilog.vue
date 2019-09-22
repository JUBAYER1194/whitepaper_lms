<template>
    <div>
        <v-dialog v-model="dialog" persistent max-width="600px">
            <template v-slot:activator="{ on }">
                <v-btn v-on="on" class="primary" depressed  >Edit</v-btn>
            </template>
            <v-card>
                <v-card-title>
                    <span class="headline">Edit Material</span>
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
                    <v-btn style="background-color:#9652ff;color:white" text @click="update">Close</v-btn>
                    <v-btn style="background-color:#9652ff;color:white"  text @click="dialog = false">Save</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
        {{edit}}
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
            material:{},

        }),
        computed:{
            edit(){
                this.material=this.data;
            }
        },
        methods:{
            filechanged(e){
                var fileReader=new FileReader();
                fileReader.readAsDataURL(e.target.files[0]);
                fileReader.onload = (e) => {
                    this.form.image=e.target.result
                }
            },

        },
        update(){

        }

    }
</script>
