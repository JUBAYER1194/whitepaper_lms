<template>
    <div>
        <div >
            <v-tabs
                color="grey lighten-2"
                flat
                grow
                v-model="tab"



            >
                <v-tab
                    :key="item.name"
                    v-for="item in items"
                    outlined
                    tile
                    style="font-size: 100%;background-color:#9652ff;color: white;"

                >
                    {{ item.name }}
                </v-tab>
            </v-tabs>
        </div>

            <v-tabs-items v-model="tab">
                <v-tab-item>
                    <v-card style="padding-bottom: 10%;padding-top:5%">
                        <Information :data="classes" :datas="material"></Information>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card style="padding: 10%;padding-top:0%">
                        <Announcement></Announcement >
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card style="padding: 10%;padding-top:0%">
                        <Assaignment></Assaignment>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card style="padding: 10%;padding-top:5%;padding-bottom: 1000%">
                        <Student></Student>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card style="padding: 10%;padding-top:5%;padding-bottom: 1000%">
                        <Exam></Exam>
                    </v-card>
                </v-tab-item>
            </v-tabs-items>


       {{getmaterial}}
    </div>

</template>
<script>
    import invite_dilog from "./invite_dilog";
    import dilog from './Material_dilog.vue';
    import Information from "./Information.vue";
    import Announcement from "./Announcement.vue";
    import Assaignment from "./Assaignment.vue";
    import Student from "./Student.vue";
    import Exam from "./Exam.vue";

    export default {

        components: {dilog, invite_dilog, Information, Announcement, Assaignment, Student, Exam},
        data() {
            return {
                tab: null,
                classes: {},
                material: {},
                items: [
                    {
                        name: 'INFORMATION',
                        to: '/information',
                    },
                    {
                        name: 'ANNOUNCEMENTS',
                        to: '/announcement',

                    },
                    {
                        name: 'ASSIGNMENTS',
                        to: '/assignment',

                    },
                    {
                        name: 'STUDENTS',
                        to: '/student',

                    },
                    {
                        name: 'Exam',
                        to: '/discussion'
                    },

                ],
                desserts: [
                    {
                        name: 'Class Name:',
                        calories: 'Physics-107',
                    },
                    {
                        name: 'Section:',
                        calories: '1',
                    },
                    {
                        name: 'created on:',
                        calories: '20th Auugust 2019',
                    },
                    {
                        name: 'Class Code:',
                        calories: '7g58df41',
                    },


                ],

            }
        },

        created() {
            this.getclass();


        },
        methods: {
            getclass() {
                axios.get(`/lms/api/class/about/${this.$route.params.name}`)
                    .then(res => this.classes = res.data.data)
            },
        },
        computed: {
            getmaterial() {
                axios.get(`/lms/api/material/${this.classes.id}`)
                    .then(res => this.material = res.data.data)
            },


        },
    }
</script>}
<style>
    /* Helper classes */
    #basil {
        background-color: #b380ff !important;
    }

    .basil--text {
        color: white !important;
    }

</style>
