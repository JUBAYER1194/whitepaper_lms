<template>
    <div>
        <v-dialog v-model="dialog" persistent max-width="600px">
            <template v-slot:activator="{ on }">
                <v-list-item-subtitle v-on="on" style="color: darkred">Update your profile</v-list-item-subtitle>
            </template>
            <v-card>
                <v-card-title>
                    <span class="headline" style="color: #3b5998;"> Update Profile</span>
                </v-card-title>
                <v-card-text>
                    <v-container>
                        <v-form @submit.prevent="update">
                        <v-text-field label="First Name:*" v-model="form.first_name" required ></v-text-field>

                            <span class="red--text" v-if="errors.first_name">{{errors.first_name[0]}}</span>
                        <v-text-field label="Last Name:*" v-model="form.last_name" required ></v-text-field>
                            <span class="red--text" v-if="errors.last_name">{{errors.last_name[0]}}</span>
                        <v-text-field label="Father Name:"  v-model="form.father_name" ></v-text-field>
                        <v-text-field label="Mother Name:"  v-model="form.mother_name" required  ></v-text-field>
                        <v-text-field label="Phone No:"  required v-model="form.phone" ></v-text-field>
                        <v-text-field label="Parents Contact No:"  required v-model="form.parents_contact" ></v-text-field>
                        <v-text-field label="NId No:"  required v-model="form.nid" ></v-text-field>
                        <v-text-field label="Email:*"  required v-model="form.email" ></v-text-field>
                            <span class="red--text" v-if="errors.email">{{errors.email[0]}}</span>
                        <v-textarea label="Address:"  required v-model="form.address" ></v-textarea>
                        <div class="form-group">
                            <h4>update your profile Picture:</h4>
                            <input type="file" @change="imageChanged"   class="form-control form-control-lg" placeholder="Large form control">
                        </div>
                        </v-form>
                    </v-container>

                </v-card-text>
                <v-card-actions>
                    <div class="flex-grow-1"></div>
                    <v-btn style="background-color:#3b5998;color:white" text @click="dialog = false">Close</v-btn>
                    <v-btn type="submit" style="background-color:#3b5998;color:white"  text @click="update">Update</v-btn>
                    {{created}}
                </v-card-actions>
            </v-card>
        </v-dialog>

    </div>
</template>

<script>
    export default {
        props:['data'],
        data (){
            return {


            dialog: false,
            date: new Date().toISOString().substr(0, 10),
            menu: false,
            modal: false,
            menu2: false,
            form: {
                checking:0,
            },
            errors:{},

            }

        },
        computed:{
            created()
            {

                this.form = this.data
            },
        },
        methods: {
            update() {
                axios.put(`/lms/api/information/${this.form.id}`,this.form)
                    .then(res => (this.dialog = false,this.$toasted.show('profile Updated',{type:'success'})))
                    .catch(error =>this.errors = error.response.data.errors)
            },
            imageChanged(e){
                var fileReader=new FileReader()
                fileReader.readAsDataURL(e.target.files[0])
                fileReader.onload = (e) => {
                    this.form.image=e.target.result

                }
                this.form.checking=1;


            },

        }

    }
</script>
