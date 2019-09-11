<template>
    <v-container>
        <v-card color="basil" style="margin-bottom: 20px;">
            <v-card-title class="text-center justify-center py-6">
            </v-card-title>

            <v-tabs
                background-color="transparent"
                color="white"
                grow
                v-model="tab"
            >
                <v-tab

                    style="color:white;font-size: 15px"
                    :key="item.name"
                    v-for="item in items"

                >

                    {{ item.name }}


                </v-tab>
            </v-tabs>

            <v-tabs-items v-model="tab">
                <v-tab-item>
                    <v-card style="padding-bottom: 1000%;padding-top:5%">
                        <AllStudent></AllStudent>
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card style="padding-bottom: 1000%;padding-top:5%">
                        <AllTeacher></AllTeacher >
                    </v-card>
                </v-tab-item>
                <v-tab-item>
                    <v-card style="padding-bottom: 1000%;padding-top:5%">
                        <Request></Request>
                    </v-card>
                </v-tab-item>
            </v-tabs-items>
        </v-card>


    </v-container>

</template>
<script>
    import invite_dilog from "../invite_dilog";
    import dilog from '../Material_dilog.vue';
    import AllStudent from "./AllStudent.vue";
    import AllTeacher from "./AllTeacher.vue";
    import Request from "./Request.vue";

    export default {

        components: {dilog, invite_dilog,AllStudent,AllTeacher,Request},
        data() {
            return {
                tab: null,
                items: [
                    {
                        name: 'All Student',
                        to: '/information',
                    },
                    {
                        name: 'All Teacher',
                        to: '/announcement',

                    },
                    {
                        name: 'Request',
                        to: '/assignment',

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
    }
</script>
<style>
    /* Helper classes */
    .basil {
        background-color: #b380ff !important;
    }

    .basil--text {
        color: white !important;
    }
</style>
