<template>
    <div>
        <v-app class="grey lighten-2">


            <Navbar />
            <v-content class="mx-4 mb-4">
                <router-view></router-view>
            </v-content>


<!--            <v-btn-->
<!--                @click="dialog = !dialog"-->
<!--                bottom-->
<!--                color="pink"-->
<!--                dark-->
<!--                fab-->
<!--                fixed-->
<!--                right-->
<!--            >-->
<!--                <v-icon>add</v-icon>-->
<!--            </v-btn>-->
<!--            <v-dialog-->
<!--                v-model="dialog"-->
<!--                width="800px"-->
<!--            >-->
<!--                <v-card>-->
<!--                    <v-card-title class="grey darken-2">-->
<!--                        Create contact-->
<!--                    </v-card-title>-->
<!--                    <v-container grid-list-sm>-->
<!--                        <v-layout-->
<!--                            row-->
<!--                            wrap-->
<!--                        >-->
<!--                            <v-flex-->
<!--                                align-center-->
<!--                                justify-space-between-->
<!--                                xs12-->
<!--                            >-->
<!--                                <v-layout align-center>-->
<!--                                    <v-avatar-->
<!--                                        class="mr-3"-->
<!--                                        size="40px"-->
<!--                                    >-->
<!--                                        <img-->
<!--                                            alt=""-->
<!--                                            src="//ssl.gstatic.com/s2/oz/images/sge/grey_silhouette.png"-->
<!--                                        >-->
<!--                                    </v-avatar>-->
<!--                                    <v-text-field-->
<!--                                        placeholder="Name"-->
<!--                                    ></v-text-field>-->
<!--                                </v-layout>-->
<!--                            </v-flex>-->
<!--                            <v-flex xs6>-->
<!--                                <v-text-field-->
<!--                                    placeholder="Company"-->
<!--                                    prepend-icon="business"-->
<!--                                ></v-text-field>-->
<!--                            </v-flex>-->
<!--                            <v-flex xs6>-->
<!--                                <v-text-field-->
<!--                                    placeholder="Job title"-->
<!--                                ></v-text-field>-->
<!--                            </v-flex>-->
<!--                            <v-flex xs12>-->
<!--                                <v-text-field-->
<!--                                    placeholder="Email"-->
<!--                                    prepend-icon="mail"-->
<!--                                ></v-text-field>-->
<!--                            </v-flex>-->
<!--                            <v-flex xs12>-->
<!--                                <v-text-field-->
<!--                                    placeholder="(000) 000 - 0000"-->
<!--                                    prepend-icon="phone"-->
<!--                                    type="tel"-->
<!--                                ></v-text-field>-->
<!--                            </v-flex>-->
<!--                            <v-flex xs12>-->
<!--                                <v-text-field-->
<!--                                    placeholder="Notes"-->
<!--                                    prepend-icon="notes"-->
<!--                                ></v-text-field>-->
<!--                            </v-flex>-->
<!--                        </v-layout>-->
<!--                    </v-container>-->
<!--                    <v-card-actions>-->
<!--                        <v-btn-->
<!--                            color="primary"-->
<!--                            text-->
<!--                        >More-->
<!--                        </v-btn>-->
<!--                        <v-spacer></v-spacer>-->
<!--                        <v-btn-->
<!--                            @click="dialog = false"-->
<!--                            color="primary"-->
<!--                            text-->
<!--                        >Cancel-->
<!--                        </v-btn>-->
<!--                        <v-btn-->
<!--                            @click="dialog = false"-->
<!--                            text-->
<!--                        >Save-->
<!--                        </v-btn>-->
<!--                    </v-card-actions>-->
<!--                </v-card>-->
<!--            </v-dialog>-->
        </v-app>
    </div>
</template>
<script>
    import Navbar from './Navbar.vue'
    export default
    {
        components: { Navbar },
        data(){
            return {
                dialog: false,
                drawer: null,
                items: [
                    {icon: 'contacts', text: 'Contacts'},
                    {icon: 'history', text: 'Frequently contacted'},
                    {icon: 'content_copy', text: 'Duplicates'},
                    {
                        icon: 'keyboard_arrow_up',
                        'icon-alt': 'keyboard_arrow_down',
                        text: 'Labels',
                        model: true,
                        children: [
                            {icon: 'add', text: 'Create label'},
                        ],
                    },
                    {
                        icon: 'keyboard_arrow_up',
                        'icon-alt': 'keyboard_arrow_down',
                        text: 'More',
                        model: false,
                        children: [
                            {text: 'Import'},
                            {text: 'Export'},
                            {text: 'Print'},
                            {text: 'Undo changes'},
                            {text: 'Other contacts'},
                        ],
                    },
                    {icon: 'settings', text: 'Settings'},
                    {icon: 'chat_bubble', text: 'Send feedback'},
                    {icon: 'help', text: 'Help'},
                    {icon: 'phonelink', text: 'App downloads'},
                    {icon: 'keyboard', text: 'Go to the old version'},
                ],
            }
        }
    }

</script>
