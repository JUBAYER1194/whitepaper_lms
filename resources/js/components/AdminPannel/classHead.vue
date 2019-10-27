

<template>
    <v-container class="grey lighten-4" style="padding-bottom:25%;margin-top: 0.5%;height: 100%">
        <v-btn depressed rounded style="background-color: #3b5998;color: white">Create Class</v-btn>
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
                        <th style=" font-size: 1.2rem "  class="text-left">Name</th>
                        <th style=" font-size: 1.2rem "  class="text-center">Status</th>
                        <th style=" font-size: 1.2rem "  colspan="2" class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr><tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn depressed style="color:white;background-color:#2196F3">Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 1rem">some name</td>
                        <td class="text-center">
                            <v-btn width="90" depressed style="color:white;background-color:#ff531a">In-Active</v-btn>
                        </td>
                        <td class="text-center">
                            <v-btn  width="60" depressed  class="primary mx-lg-6 my-3">Edit</v-btn>

                            <v-btn width="60" depressed class="error my-3">Delete</v-btn>
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


