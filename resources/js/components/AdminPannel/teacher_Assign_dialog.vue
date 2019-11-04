<template>

    <v-dialog  v-model="dialog" persistent max-width="600px">
        <template v-slot:activator="{ on }">
            <v-btn v-on="on" small width="70" color="primary mx-lg-6 my-3"  depressed >Assign</v-btn>
        </template>
        <v-card>
            <v-card-title>
                <span style="color:#3b5998;" class="headline">Assign Class/Subject</span>
            </v-card-title>
            <v-card-text>
                <v-container>


                    <v-select
                        :items="dataH"
                        chips
                        item-text="name"
                        item-value="id"
                        return-object
                        label="Select Class"
                        multiple
                        rounded
                        outlined
                        deletable-chips
                        v-model="form.Selected_ClassHaed"
                        v-on:change="checkingButton"
                    ></v-select>


                    <v-select
                        :items="form.Selected_ClassHaed"
                        label="Select Class"
                        item-text="name"
                        item-value="id"
                        outlined
                        rounded
                        v-model="form.classHead"

                    >

                    </v-select>

                    <v-select
                        v-model="form.subject"
                        :items="selectedSubject"
                        chips
                        item-text="name"
                        item-value="id"
                        label="Select Subject"
                        multiple
                        rounded
                        return-object
                        deletable-chips
                        outlined
                        v-on:change="checkingButton"
                    ></v-select>
                </v-container>
                <small>*indicates required field</small>
            </v-card-text>
            <v-card-actions>
                <v-spacer></v-spacer>
                <v-btn style="background-color:#3b5998;color:white" text @click="dialog = false">Close</v-btn>
                <v-btn style="background-color:#3b5998;color:white;text-transform: none" v-if="x==1" text @click="Assign_ClassRoom">Save</v-btn>
            </v-card-actions>
        </v-card>
        {{getting_subject}}
        {{User_Subject}}
        {{User_class}}
        {{puttingdata}}
        {{makingNull}}


    </v-dialog>

</template>
<script>
    export default {
        props: ['data','dataH','datafld'],
        data: () => ({
            dialog: false,
            form: {
                Selected_ClassHaed:null,
                classHead: null,
                subject: null,
                check:0,
            },
            checkingSubject:null,
            datak:[],
            selectedSubject:{},
            subject:{},
            data_S:[],
        }),
        created(){
            this.subject=this.datafld;
            this.datak=this.dataH;
        },


        computed:{
            makingNull()
            {
                if (this.form.Selected_ClassHaed==''){
                    this.form.classHead=null
                    this.form.check=1;

                }
            },
            getting_subject: function(){
                this.selectedSubject=this.subject.filter((el) => {
                    return (el.class_head_id== this.form.classHead);

                });

            },


            User_Subject()
            {
                this.form.subject=this.data.subject;
            },
            User_class(){
                this.form.Selected_ClassHaed=this.data.class_head;
            },

        },
        methods:{
            checkingButton()
            {
                this.x=1;
            },

            gettingcheckingsubject(id){
                this.puttingclass=id;
            },
            Assign_ClassRoom()
            {
                axios.post(`/lms/api/teacher/assign_c_s/${this.data.id}`,this.form)
                    .then(res =>this.dialog=false,this.$toasted.show('Assigned',{type:'success'}),
                    )
            },





        }
    }
</script>
