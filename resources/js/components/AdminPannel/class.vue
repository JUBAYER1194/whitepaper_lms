
<template>
    <v-container class="grey lighten-4" style="padding-bottom:15%;margin-top: 1%">
        <v-btn style="background-color: #9652ff;color: white">Create Class Head</v-btn>
        <br>
        <br>
        <v-simple-table
            style="width:50%"
        >
            <template v-slot:default>
                <thead>
                <tr>
                    <th style=" font-size: 1.2rem "  class="text-left">Name</th>
                    <th style=" font-size: 1.2rem "  colspan="2" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>some name</td>
                    <td class="text-center">
                        <v-btn class="primary">Edit</v-btn>
                        <v-btn class="error">Delete</v-btn>
                    </td>
                </tr>
                </tbody>
            </template>
        </v-simple-table>
        <br>
        <v-btn style="background-color: #9652ff;color: white">Create Subject</v-btn>
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
                <th style=" font-size: 1.2rem " class="text-center font-weight-black">Profile</th>
                <th style=" font-size: 1.2rem " class="text-center font-weight-black">Class Head</th>
                <th style=" font-size: 1.2rem;" colspan="2"  class="text-center font-weight-black">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>
                    <h2> Bangla 1st Paper</h2>
                </td>

                <td>
                    <details_dilog ></details_dilog>
                </td>
                <td>
                    <h2 style="text-align: center"> class-1</h2>
                </td>
                <td class="text-center">
                    <v-btn class="primary">Edit</v-btn>
                    <v-btn class="error">Delete</v-btn>
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

