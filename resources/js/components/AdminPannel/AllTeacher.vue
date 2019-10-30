<template>
    <v-container class="grey lighten-4" style="padding-bottom:25%;margin-top: 0.5%;height: 100%">
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
                <th style=" font-size: 1.2rem " class="text-left font-weight-black">Name</th>
                <th style=" font-size: 1.2rem " class="text-center font-weight-black">Profile</th>
                <th style=" font-size: 1.2rem " class="text-center font-weight-black">Status</th>
                <th colspan="2" style=" font-size: 1.2rem;" class="text-center font-weight-black">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr><tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>
            <tr>
                <td>
                    <v-list  class="grey lighten-4 ma-0 pa-0" subheader>
                        <v-list-item
                        >
                            <v-list-item-avatar>
                                <v-img src="https://cdn.vuetifyjs.com/images/profiles/marcus.jpg"></v-img>
                            </v-list-item-avatar>
                            <v-list-item-content>
                                <v-list-item-title> Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>
                    </v-list>
                </td>
                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td class="text-center">
                    <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                </td>
                <td class="text-center">
                    <v-btn width="100" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
                    <v-btn width="100"   color="error my-3"  depressed >Delete</v-btn>
                </td>



            </tr>

            </tbody>
        </template>
    </v-simple-table>
    </v-container>

</template>
<script>
    import details_dilog from "./details_dilog.vue";

    export default {
        components:{details_dilog},
        data () {
            return {

            }
        },
    }
</script>
<style>

</style>

