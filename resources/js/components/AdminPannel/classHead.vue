

<template>
    <v-container class="grey lighten-4" style="padding-bottom:25%;margin-top: 0.5%;height: 100%">
        <head_dialog></head_dialog>
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
                    <tr v-for="classHead in classHeads">
                        <td style="font-size: 1rem">{{classHead.name}}</td>
                        <td class="text-center">
                            <v-btn width="80" small v-if="classHead.status==1" depressed class="info">Active</v-btn>
                            <v-btn small v-else width="80"  depressed style="color:white;background-color:#ff531a">In-Active</v-btn>

                        </td>

                        <td class="text-center">
                            <Edit_dialog :data="classHead"></Edit_dialog>
                            <Delete_dialog :data="classHead"></Delete_dialog>
                        </td>
                    </tr>
                    </tbody>
                </template>
            </v-simple-table>
{{  getclassHead}}
    </v-container>

</template>
<script>
    import details_dilog from "./details_dilog.vue";
    import head_dialog from "./class_head_dialog.vue"
    import Edit_dialog from "./Edit_class_head.vue";
    import Delete_dialog from "./Delete_class_head.vue";

    export default {
        props:['data'],
        components:{details_dilog,head_dialog,Edit_dialog,Delete_dialog},
        data () {
            return {
                classHeads:{},
                deleteId:null,

            }
        },
        created()
        {
          this.Createhead();
          this.Deletehead();
        },
        methods:
            {
                Createhead(){
                    EventBus.$on('class-head-created',(ann) =>{
                        this.classHeads.unshift(ann)
                    })
                },
                Deletehead(){
                    EventBus.$on('class-head-deleted',(annd) =>{
                        this.classHeads.splice(this.classHeads.indexOf(annd), 1);
                    })
                },
            },
        computed:{
            getclassHead() {
                this.classHeads=this.data;
            }
        }



    }
</script>
<style>

</style>


