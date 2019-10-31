<template>
    <v-container class="grey lighten-4" style="padding-bottom:25%;margin-top: 0.5%;height: 100%">
    <v-simple-table
        fixed-header
        width="100%"
        height="100%"
        class="grey lighten-4"
        flat
    >
        <template v-slot:default>
            <thead>
            <tr>
                <th class="ma-0 pa-0" width="1"></th>
                <th style=" font-size: 1.2rem " class="text-left font-weight-black">Name</th>
                <th style=" font-size: 1.2rem " class="text-center font-weight-black">Class</th>
                <th style=" font-size: 1.2rem " class="text-center font-weight-black">Profile</th>
                <th style=" font-size: 1.2rem " class="text-center font-weight-black">Status</th>
                <th colspan="2" style=" font-size: 1.2rem;" class="text-center font-weight-black">Action</th>
            </tr>
            </thead>
            <tbody v-if="data.length">
            <tr v-for="(student,index) in data">
                <td>{{index+1}}</td>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img :src="'http://127.0.0.1:8000/uploads/x/x/profile/blank-profile.png'"
                                       v-if="student.image==null"></v-img>
                                <v-img :src="'http://127.0.0.1:8000/uploads/x/x/profile/'+ student.image"
                                       v-else></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> {{student.first_name}} {{student.last_name}}</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <template v-if="student.class_head !=''">
                <td v-for="(className,index) in student.class_head" class="text-center" style="font-size: 1rem">
                     {{className.name}}
                </td>
                </template>
                <template v-else>
                    <td  class="text-center" style="font-size: 1rem">
                        Not Assigned
                    </td>
                </template>

                <td>
                    <details_dilog :data="student"></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed small style="color:white;background-color:#2196F3" v-if="student.status==1"
                           width="70">Active
                    </v-btn>
                    <v-btn depressed small style="color:white;background-color:#ff531a" v-else width="70">In-Active
                    </v-btn>
                </td>
                <td class="text-center">
                    <Student_Assign_dialog :dataH="dataH" :datafld="datafld" :data="student"></Student_Assign_dialog>
                    <Delete_Request :data="student"></Delete_Request>
                </td>
            </tr>
            </tbody>
        </template>
    </v-simple-table>
    </v-container>
</template>
<script>
    import details_dilog from "./details_dilog.vue";
    import Student_Assign_dialog from "./Student_Assign_dialog.vue";
    import Delete_Request from "./Delete_Request.vue";

    export default {
        components: {details_dilog, Student_Assign_dialog,Delete_Request},
        props: ['data','dataH','datafld'],
        data () {
            return {
                AllClass:null,
                AllSubject:null,

            }
        },
        created() {
            this.deleteStudent();
        },
        methods:{
            changing(){
                this.y=1;
            },
            deleteStudent()
            {
                EventBus.$on('user-deleted',(userDelete) =>{
                        this.data.splice(this.data.indexOf(userDelete), 1);
                    })
            },

        },
        computed:
            {
                gettingClass()
                {

                },
                gettingSubject(){

                },

            },
    }
</script>
<style>

</style>

