<template>
    <div>
    <v-dialog v-model="dialog" persistent max-width="600px">
        <template v-slot:activator="{ on }">
            <v-btn
                color="#751aff"
                dark
                v-on="on"
                depressed

            >Create Class</v-btn>
        </template>
        <v-card>
            <v-card-title>
                <span class="headline">Create Class</span>
            </v-card-title>
            <v-card-text>
                <v-container>

                            <v-text-field label="Class Name*" v-model="classes.name" required></v-text-field>


                            <v-text-field label="Section*"  required v-model="classes.section" ></v-text-field>


                            <v-textarea
                                label="Description"
                                v-model="classes.description"
                            ></v-textarea>
                         <v-text-field label="Code*" type="number"  v-model="classes.code" required ></v-text-field>


                </v-container>

            </v-card-text>
            <v-card-actions>
                <div class="flex-grow-1"></div>
                <v-btn style="background-color:#9652ff;color:white" text @click="dialog = false">Close</v-btn>
                <v-btn style="background-color:#9652ff;color:white"  text @click="create">Save</v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>
        {{userId}}
    </div>
</template>

<script>
    export default {
        data: () => ({
            dialog: false,
            modal: false,
            menu2: false,
            classes:{
                name:null,
                section:null,
                description:null,
                code:null,
                user_id:null,

            },
        }),
        computed:{
            userId(){
                this.classes.user_id=User.id();
            },

        },
        methods:{
          create(){
              axios.post(`/api/class/`,this.classes)
                  .then(res =>this.dialog=false,this.$toasted.show('Class Created',{type:'success'}),
                      EventBus.$emit('newClass',this.classes)
                  )
          }
        },
    }
</script>
