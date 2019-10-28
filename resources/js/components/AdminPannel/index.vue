<template>
    <div>
        <div >
            <v-tabs
                color="grey lighten-2"  flat
                grow
                v-model="tab"
                center-active
                mobile-break-point
                slider-size="4"





            >
                <v-tab
                    :key="item.name"
                    v-for="item in items"
                    outlined
                    tile
                    style="font-size:1em;background-color:#3b5998;color: white;"


                >
                    {{ item.name }}
                </v-tab>
            </v-tabs>
        </div>

        <v-tabs-items  v-model="tab">
            <v-tab-item>
                <v-card class="grey lighten-4" flat>

                    <Classhead :data="class_head"></Classhead>
                </v-card>
            </v-tab-item>
            <v-tab-item>
                <v-card class="grey lighten-4" flat>
                    <C_lass :dataH="class_head" :datafld="subjects"></C_lass>
                </v-card>
            </v-tab-item>
            <v-tab-item>
                <v-card class="grey lighten-4" flat>
                    <All_Student></All_Student>
                </v-card>
            </v-tab-item>
            <v-tab-item>
                <v-card class="grey lighten-4" flat>
                    <AllTeacher></AllTeacher >
                </v-card>
            </v-tab-item>
            <v-tab-item>
                <v-card class="grey lighten-4" flat>
                    <Request></Request>
                </v-card>
            </v-tab-item>
        </v-tabs-items>


        {{getmaterial}}
        {{getuser}}
        {{getannouncement}}
        {{getassignment}}
    </div>

</template>
<script>
    import All_Student from "./AllStudent.vue";
    import AllTeacher from "./AllTeacher.vue";
    import Request from "./Request.vue";
    import C_lass from "./class.vue";
    import Classhead from "./classHead.vue"

    export default {

        components: {AllTeacher, All_Student,Request,C_lass,Classhead},
        data() {
            return {
                tab: null,
                items: [
                    {
                        name:'Class'
                    },
                    {
                      name:'Subject'
                    },
                    {
                        name: 'Student',

                    },
                    {
                        name: 'Teacher',


                    },
                    {
                        name: 'Permission',


                    },

                ],
                class_head:{},
                subjects:{},

            }
        },
        created()
        {
           this. getclassHead();
           this.getSubject();
        },


        methods: {
            getclassHead() {
                axios.get('/lms/api/class-head')
                    .then(res => this.class_head = res.data)


            },
            getSubject()
            {
                axios.get('/lms/api/class')
                    .then(res => this.subjects = res.data.data)

            },

        },
        computed: {



        },
    }
</script>
<style>


</style>
