<template>
    <v-dialog
        v-model="dialog"
        max-width="290"
    >
        <template v-slot:activator="{ on }">
            <v-btn v-on="on" small class="my-3" color="error" width="70"  depressed >Delete</v-btn>
        </template>
        <v-card>
            <v-card-title style="font-size:1em;color:darkred" >Are you sure you want to delete?</v-card-title>

            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn
                    small
                    style="background-color:#3b5998;color:white"
                    text
                    @click="dialog = false"
                >
                    Cancel
                </v-btn>

                <v-btn
                    small
                    style="background-color:#3b5998;color:white"
                    text
                    @click="deleteClassHead"
                >
                    Delete
                </v-btn>
            </v-card-actions>
        </v-card>
    </v-dialog>

</template>
<script>
    export default {
        props:['data'],
        data () {
            return {
                dialog: false,
            }
        },
        methods:{
            deleteClassHead(){
                axios.delete(`/lms/api/user/delete_user/${this.data.id}`)
                    .then(res =>this.dialog=false,this.$toasted.show('User Deleted',{type:'success'}),
                        EventBus.$emit('user-deleted',this.data)
                    )
            }
        }
    }
</script>
