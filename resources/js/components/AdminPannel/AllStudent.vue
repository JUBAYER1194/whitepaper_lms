<template>
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
                <th style=" font-size: 1.2rem " class="text-center font-weight-black">Class</th>
                <th style=" font-size: 1.2rem; padding-right:5%  " class="text-right font-weight-black">Action</th>
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
                <td>
                    <h1 style="text-align: center"> class-1</h1>
                </td>
                    <td>
                    <v-btn style="float: right;margin-right:8%;" color="error"  depressed >Delete</v-btn>
                </td>



            </tr>
            </tbody>
        </template>
    </v-simple-table>

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

