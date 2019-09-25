<template>
    <v-card
        class="mx-auto d-flex flex-wrap"
        max-width="100%"
        flat
        style="padding-top: 5%"

        >

       <dilog :data="lmsclass_id"></dilog>
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
                    style="text-align:center;font-size:140%;background-color:#9652ff;color: white"
                >
                    Announcements
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
                v-for="(announcement,index) in announcements" :key="announcement.id"
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
                        <span class="title font-weight " style="color:darkred;">{{announcement.title}}</span>
                    </v-card-title>
                    <v-card-text style="padding-left: 10%">
                   {{announcement.created_at}}
                   </v-card-text>


                    <v-card-text class="headline font-weight-bold">
                        "{{announcement.body}}"
                    </v-card-text>

                    <v-card-actions>
                        <v-list-item class="grow">
                            <v-list-item-avatar color="grey darken-3">
                                <v-img
                                    class="elevation-6"
                                    :src="'http://127.0.0.1:8000/uploads/x/profile/'+ announcement.image"
                                ></v-img>
                            </v-list-item-avatar>

                            <v-list-item-content>
                                <v-list-item-title class="title text-capitalize">{{announcement.first_name}} {{announcement.last_name}}</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>

                    </v-card-actions>
                </v-card>
                <v-card flat>
                    <v-card-title>
                        <v-row>
                            <v-col
                                md="6"
                            >
                                <div class="my-2">
                                    <VEditDialog :data="announcement"></VEditDialog>
                                </div>
                            </v-col>
                            <v-col
                                md="6"
                            >
                                <div class="my-2">
                                    <v-btn color="error" @click="DeleteAnnouncement(index,announcement.id)" depressed>Delete</v-btn>
                                </div>
                            </v-col>
                        </v-row>
                    </v-card-title>
                </v-card>
            </v-col>
        </v-row>
          {{getannouncements}}
          {{getclassid}}

    </v-card>
</template>
<script>
    import dilog from './Announcement_dilog.vue';
    import VEditDialog from './EditAnnouncements_dilog.vue';

    export default {
        components: {dilog,VEditDialog},
        props:['data','datas'],
        data() {
            return {
                announcements: {},
                user_id:null,
                lmsclass_id:null,


            }
        },
        created() {

            this.listen()

        },
        methods:{
            DeleteAnnouncement(index,x){
                axios.delete(`/lms/api/announcement/${x}`)
                    .then(res =>this.announcements.splice(index, 1))

            },
            listen(){
                EventBus.$on('newAnn',(ann) =>{
                    this.announcements.unshift(ann)
                })
            },

        },
        computed:{
          getannouncements(){
              this.announcements=this.data;
          },
            getclassid(){
                this.lmsclass_id=this.datas;
            },
        },


    }

</script>
<style>
    /*@media screen and (max-width: 400px) {*/
    /*    .sidebar{*/
    /*        font-size:200%*/
    /*    }*/
    /*}*/

</style>
