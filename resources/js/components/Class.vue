<template>
    <v-container>
        <v-card color="basil" style="margin-bottom: 20px">
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
                    :href="item.to"
                >

                        {{ item.name }}


                </v-tab>
            </v-tabs>

            <v-tabs-items v-model="tab">
                <v-tab-item
                    :key="item"
                    v-for="item in items"
                >
                </v-tab-item>
            </v-tabs-items>
        </v-card>
        <v-content class="mx-4 mb-4">
            <router-view> </router-view>
        </v-content>

    </v-container>

</template>
<script>
    import invite_dilog from "./invite_dilog";
    import dilog from './Material_dilog.vue'

    export default {
        components: {dilog, invite_dilog},
        data() {
            return {
                tab: null,
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
                        name: 'DISCUSSION',
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
