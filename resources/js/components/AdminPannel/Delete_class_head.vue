<template>
        <v-dialog
            v-model="dialog"
            max-width="290"
        >
            <template v-slot:activator="{ on }">
                <v-btn class="error my-3" depressed small v-on="on" width="80">Delete</v-btn>
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
                axios.delete(`/lms/api/class-head/${this.data.id}`)
                    .then(res =>this.dialog=false,this.$toasted.show('Class Deleted',{type:'success'}),
                        EventBus.$emit('class-head-deleted',this.data)
                    )
            }
        }
    }
</script>
