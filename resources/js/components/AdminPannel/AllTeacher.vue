<template>
    <v-container class="grey lighten-4" style="padding-bottom:25%;margin-top: 0.5%;height: 100%">

        <div align="right">
        <v-text-field
            class="my-input"
            style="width: 30%;"
            placeholder="Search By Name"
            outlined
            rounded
            append-icon
            v-model="search"
        >
            <v-tooltip slot="append" bottom>
                <v-icon slot="activator" color="primary" dark>search</v-icon>
                <span>Tooltip</span>
            </v-tooltip>
        </v-text-field>

        </div>

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
                    <th style=" font-size: 1.2rem " class="text-center font-weight-black">Profile</th>
                    <th style=" font-size: 1.2rem " class="text-center font-weight-black">Status</th>
                    <th  style=" font-size: 1.2rem;" class="text-center font-weight-black">Action</th>
                    <th  style=" font-size: 1.2rem;" class="text-center font-weight-black">Last Login Ip</th>
                    <th  style=" font-size: 1.2rem;" class="text-center font-weight-black">Last Login Time</th>
                </tr>
                </thead>
                <tbody v-if="data.length">
                <tr  v-for="(teacher,index) in filteredBlogs">
                    <td>{{index+1}}</td>
                    <td>
                        <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                            <v-list-item
                            >
                                <v-list-item-avatar>
                                    <v-img :src="'http://127.0.0.1:8000/uploads/x/x/profile/blank-profile.png'"
                                           v-if="teacher.image==null"></v-img>
                                    <v-img :src="'http://127.0.0.1:8000/uploads/x/x/profile/'+ teacher.image"
                                           v-else></v-img>
                                </v-list-item-avatar>
                                <v-list-item-content>
                                    <v-list-item-title class="text-capitalize"> {{teacher.first_name}} {{teacher.last_name}}</v-list-item-title>
                                </v-list-item-content>
                            </v-list-item>
                        </v-list>
                    </td>

                    <td>
                        <Teacher_details_dialog :data="teacher"></Teacher_details_dialog>
                    </td>
                    <td class="text-center">
                        <v-btn depressed small style="color:white;background-color:#2196F3" v-if="teacher.Status==1"
                               width="70">Active
                        </v-btn>
                        <v-btn depressed small style="color:white;background-color:#ff531a" v-else width="70">In-Active
                        </v-btn>
                    </td>
                    <td class="text-center">
                        <teacher_Assign_dialog :dataH="dataH" :datafld="datafld" :data="teacher"></teacher_Assign_dialog>
                        <userEditProfile :data="teacher"></userEditProfile>
                        <Delete_Request :data="teacher"></Delete_Request>
                    </td>
                    <td class="text-center" v-if="teacher.login_ip!=null">
                        {{teacher.login_ip}}
                    </td>
                    <td class="text-center" v-if="teacher.login_ip==null">
                        Not logged In Yet
                    </td>
                    <td class="text-center" v-if="teacher.login_time!=null" >
                        {{teacher.login_time}}
                    </td>
                    <td class="text-center" v-if="teacher.login_time==null" >
                        Not logged In Yet
                    </td>
                </tr>
                </tbody>
            </template>
        </v-simple-table>
    </v-container>
</template>
<script>
    import userEditProfile from "./userEditProfile.vue";
    import Teacher_details_dialog from './Teacher_details_dialog.vue';
    import teacher_Assign_dialog from "./teacher_Assign_dialog.vue";
    import Delete_Request from "./Delete_Request.vue";

    export default {
        components: {Teacher_details_dialog, teacher_Assign_dialog,Delete_Request,userEditProfile},
        props: ['data','dataH','datafld'],
        data () {
            return {
                AllClass:null,
                AllSubject:null,
                search:'',

            }
        },
        created() {
            this.deleteteacher();
        },
        methods:{
            changing(){
                this.y=1;
            },
            deleteteacher()
            {
                EventBus.$on('user-deleted',(userDelete) =>{
                    this.data.splice(this.data.indexOf(userDelete), 1);
                })
            },

        },
        computed:
            {
                filteredBlogs: function(){
                    return this.data.filter((el) => {
                        return (el.first_name.toLowerCase().match(this.search)) ||(el.first_name.toUpperCase().match(this.search));
                    });
                },
                gettingClass()
                {

                },
                gettingSubject(){

                },

            },
    }
</script>
<style>
    /*.my-input input{*/
    /*    text-transform: uppercase*/
    /*}*/
</style>

