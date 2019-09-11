<template>
    <v-container>
        <v-card
            max-width="1000"
            class="mx-auto"
            height="750"
            width="700"
            style="float: left;"
            flat

        >
            <v-toolbar
                color="#9652ff"
                dark
            >
                <v-toolbar-title>All Student</v-toolbar-title>
                <v-toolbar-title style="padding-left: 60%">Action</v-toolbar-title>

                <div class="flex-grow-1"></div>

            </v-toolbar>
            <v-list>
                <v-list-item
                    v-for="item in items"
                    :key="item.title"
                    @click=""
                >
                    <v-list-item-avatar>
                        <v-img :src="item.avatar"></v-img>
                    </v-list-item-avatar>
                    <v-list-item-content>
                        <v-list-item-title v-text="item.title"></v-list-item-title>
                    </v-list-item-content>

                    <v-list-item-content>
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
                                <v-list-item-title>
                                    <v-btn
                                        style="float: right;background-color:darkred;color: white;display: inline"
                                    >Remove</v-btn>
                                </v-list-item-title>
                            </v-col>
                        </v-row>
                    </v-list-item-content>
                </v-list-item>
            </v-list>
        </v-card>
    </v-container>
</template>
<script>
    import details_dilog from "./details_dilog.vue";
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


