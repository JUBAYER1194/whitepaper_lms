<template>

        <v-card
            class="mx-auto d-flex flex-wrap"
            max-width="100%"
            flat
            style="padding-top: 5%"

        >


                <div
                    v-for="item in items"
                    :key="item.title"
                    @click=""
                    style="padding:4% "
                >
                    <div>

                        <v-img style="height:80%;width: 80%" :src="item.avatar"></v-img>
                        {{item.title}}

                        <v-row>
                            <v-col
                                cols="12"
                                md="6"
                            >
                                <v-list-item-title>
                                    <details_dilog></details_dilog>

                                </v-list-item-title>
                            </v-col>
                            <v-col
                                cols="12"
                                md="6"
                            >

                                    <v-btn
                                        style="float: right;background-color:darkred;color: white;width:100%;"
                                    >Remove</v-btn>

                            </v-col>
                        </v-row>
                </div>
                </div>

        </v-card>

</template>
<script>
    import details_dilog from "../components/AdminPannel/details_dilog.vue";
    export default {
        components:{details_dilog},
        data () {
            return {
                items: [
                    { icon: true, title: 'Jason Oner', avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg' },
                    { title: 'Travis Howard', avatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg' },
                    { title: 'Ali Connors', avatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg' },
                    { title: 'Cindy Baker', avatar: 'https://cdn.vuetifyjs.com/images/lists/4.jpg' },
                    { icon: true, title: 'Jason Oner', avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg' },
                    { title: 'Travis Howard', avatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg' },
                    { title: 'Ali Connors', avatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg' },
                    { title: 'Cindy Baker', avatar: 'https://cdn.vuetifyjs.com/images/lists/4.jpg' },
                    { icon: true, title: 'Jason Oner', avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg' },
                    { title: 'Travis Howard', avatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg' },
                    { title: 'Ali Connors', avatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg' },
                    { title: 'Cindy Baker', avatar: 'https://cdn.vuetifyjs.com/images/lists/4.jpg' },
                    { icon: true, title: 'Jason Oner', avatar: 'https://cdn.vuetifyjs.com/images/lists/1.jpg' },
                    { title: 'Travis Howard', avatar: 'https://cdn.vuetifyjs.com/images/lists/2.jpg' },
                    { title: 'Ali Connors', avatar: 'https://cdn.vuetifyjs.com/images/lists/3.jpg' },
                    { title: 'Cindy Baker', avatar: 'https://cdn.vuetifyjs.com/images/lists/4.jpg' },
                ],
            }
        },
    }
</script>


