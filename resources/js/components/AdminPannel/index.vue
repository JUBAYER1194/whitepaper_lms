<template>
    <div>
        <div >
            <v-tabs
                color="grey lighten-2"  flat
                grow
                v-model="tab"
                center-active
                mobile-break-point





            >
                <v-tab
                    :key="item.name"
                    v-for="item in items"
                    outlined
                    tile
                    style="font-size:1em;background-color:#9652ff;color: white;"


                >
                    {{ item.name }}
                </v-tab>
            </v-tabs>
        </div>

        <v-tabs-items  v-model="tab">
            <v-tab-item>
                <v-card class="grey lighten-4" flat>
                    <C_lass></C_lass>
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
            <v-tab-item>
                <v-card class="grey lighten-4" flat>
                    <Assign></Assign>
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
    import Assign from "./Assign.vue";
    import C_lass from "./class.vue";

    export default {

        components: {AllTeacher, All_Student,Request,Assign,C_lass},
        data() {
            return {
                tab: null,
                items: [
                    {
                      name:'Class'
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
                    {
                        name: 'Assign',


                    },


                ],

            }
        },


        methods: {

        },
        computed: {



        },
    }
</script>
<style>


</style>
