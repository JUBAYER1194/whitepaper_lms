
<template>
    <v-container class="grey lighten-4" style="padding-bottom:25%;margin-top: 0.5%">
        <Dilog :datah="dataH"></Dilog>
        <br>
        <br>
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
                    <th  style=" font-size: 1.2rem " class="text-left font-weight-black">Name</th>
                    <th style=" font-size: 1.2rem " class="text-center font-weight-black">Class</th>
                    <th style=" font-size: 1.2rem " class="text-center font-weight-black">Profile</th>
                    <th style=" font-size: 1.2rem " class="text-center font-weight-black">Status</th>
                </tr>
                <th style=" font-size: 1.2rem;" colspan="2"  class="text-center font-weight-black">Action</th>
                </thead>
                <tbody>
                <tr v-for="subject in datafld">
                    <td style="font-size: 1rem">
                        {{subject.name}}
                    </td>

                    <td style="text-align: center;font-size: 1rem">
                        {{subject.class_name}}
                    </td>
                    <td>
                        <details_dilog ></details_dilog>
                    </td>
                    <td class="text-center">
                        <v-btn v-if="subject.status==1" depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        <v-btn v-else width="90" depressed style="color:white;background-color:#ff531a" >In-Active</v-btn>
                    </td>
                    <td class="text-center">
                        <v-btn depressed width="60"  class="primary mx-lg-6 my-3">Edit</v-btn>
                        <v-btn  depressed width="60"  class="error my-3">Delete</v-btn>
                    </td>

                </tr>

                </tbody>
            </template>
        </v-simple-table>
    </v-container>

</template>
<script>
    import details_dilog from "./details_dilog.vue";
    import Dilog from "./class_Profile_dialog.vue";
    export default {
        props:['dataH','datafld'],
        components:{details_dilog,Dilog},
        data () {
            return {

            }
        },
    }
</script>
<style>

</style>
