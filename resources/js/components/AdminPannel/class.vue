
<template>
    <v-container class="grey lighten-4" style="padding-bottom:25%;margin-top: 0.5%">
        <v-btn rounded style="background-color: #3b5998;color: white">Create Subject</v-btn>
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
                    <th style=" font-size: 1.2rem " class="text-left font-weight-black">Name</th>
                    <th style=" font-size: 1.2rem " class="text-center font-weight-black">Class Head</th>
                    <th style=" font-size: 1.2rem " class="text-center font-weight-black">Profile</th>
                    <th style=" font-size: 1.2rem;" colspan="2"  class="text-center font-weight-black">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="font-size: 1rem">
                        Bangla 1st Paper
                    </td>

                    <td style="text-align: center;font-size: 1rem">
                        class-1
                    </td>
                    <td>
                        <details_dilog ></details_dilog>
                    </td>
                    <td class="text-center">
                        <v-btn width="60"  class="primary mx-lg-6">Edit</v-btn>
                        <v-btn  width="60"  class="error">Delete</v-btn>
                    </td>



                </tr>
                <tr>
                    <td style="font-size: 1rem">
                        Bangla 1st Paper
                    </td>

                    <td style="text-align: center;font-size: 1rem">
                        class-1
                    </td>
                    <td>
                        <details_dilog ></details_dilog>
                    </td>
                    <td class="text-center">
                        <v-btn width="60"  class="primary mx-lg-6">Edit</v-btn>
                        <v-btn  width="60"  class="error">Delete</v-btn>
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
