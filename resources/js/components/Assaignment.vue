<template>

    <v-card
        class="mx-auto d-flex flex-wrap"
        max-width="100%"
        height="100%"
        flat
        style="padding-top: 5%"

    >

        <dilog :data1="Cdata"></dilog>
        <v-row class="d-flex">
            <v-col
                cols="12"
                md="3"
            >

            </v-col>
            <v-col
                cols="12"
                md="6"
            >
                <h1
                    class="sidebar"
                    style="text-align:center;font-size:140%;color:#9652ff"
                >
                    Assignments
                </h1>
            </v-col>
            <v-col
                cols="12"
                md="4"
            >

            </v-col>
        </v-row>


        <v-row style="margin-top:5%;">

            <v-col
                cols="12"
                md="4"
                v-for="(assignment,index) in assignments" :key="assignment.id"
            >
                <v-card
                    class="mx-auto"
                    color="#9652ff"
                    dark
                    max-width="100%"

                >
                    <v-card-title>
                        <v-icon
                            large
                            left
                        >
                            mdi-twitter
                        </v-icon>
                        <span class="title font-weight " style="color:darkred;">Deadline: {{assignment.deadline}}</span>
                    </v-card-title>
                    <v-card-text style="padding-left: 10%">
                        {{assignment.created_at}}
                    </v-card-text>
                    <v-card-title>
                        {{assignment.title}}
                    </v-card-title>
                    <v-card-actions>
                        <v-list-item class="grow">
                                <a :href="'http://faisalsarker.com/lms/public/uploads/x/x/assignment/'+assignment.file" target="_blank"><button type="button" class="btn btn-sm">Read File</button></a>
                        </v-list-item>
                    </v-card-actions>
                    <v-card-text class="headline font-weight-bold">
                        {{assignment.body}}
                    </v-card-text>

                </v-card>
                <v-card flat>
                    <v-card-title>
                        <v-row>
                            <v-col
                                md="6"
                            >
                                <div class="my-2">
                                    <VEditDialog :data="assignment"></VEditDialog>
                                </div>
                            </v-col>
                            <v-col
                                md="6"
                            >
                                <div class="my-2">
                                    <v-btn color="error"  depressed @click="deleteAssignment(index,assignment.id)">Delete</v-btn>
                                </div>
                            </v-col>
                        </v-row>
                    </v-card-title>
                </v-card>
            </v-col>


        </v-row>
        {{geetingClassId}}
        {{gettingAssignment}}
    </v-card>
</template>
<script>
    import dilog from './Assignment_dilog'
    import VEditDialog from './EditAssignments_dilog.vue'
    export default {
        props:['Adata','Cdata'],
        components:{dilog,VEditDialog},
        data(){
            return {
                assignments:{},
                class_id:null,



            }
        },
        created() {

            this.listen()

        },
       computed:{
            geetingClassId(){
              this.class_id=this.Cdata;
            },
           gettingAssignment(){
             this.assignments=this.Adata;
           },
       },
        methods:{
            deleteAssignment(index,x){
                axios.delete(`/lms/api/class/assignment/${x}`)
                    .then(res =>this.assignments.splice(index, 1))
            },
            listen(){
                EventBus.$on('newAssignment',(an1) =>{
                    this.assignments.unshift(an1)
                })
            },
        },

    }

</script>
