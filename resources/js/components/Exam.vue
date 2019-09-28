<template>
    <v-container>
        <v-row class="d-flex">
            <v-col
                class="d-flex"
                md="3"
            >
                <v-col
                    class="d-flex"
                    md="7"
                >
                    <v-dialog
                        ref="dialog"
                        v-model="modal"
                        :return-value.sync="form.date"
                        persistent
                        width="290px"
                    >
                        <template v-slot:activator="{ on }">
                            <v-text-field
                                v-model="form.date"
                                label="Picker in dialog"
                                prepend-icon="event"
                                readonly
                                v-on="on"
                            ></v-text-field>
                        </template>
                        <v-date-picker v-model="form.date" scrollable>
                            <div class="flex-grow-1"></div>
                            <v-btn text color="primary" @click="modal = false">Cancel</v-btn>
                            <v-btn text color="primary" @click="$refs.dialog.save(form.date)">OK</v-btn>
                        </v-date-picker>
                    </v-dialog>
                </v-col>
                <v-col class="d-flex"
                       md="5">
                    <v-btn

                        :disabled="Disabled"
                        @click="CreateExam"
                        style="color: white;background-color: #9652ff"
                    >Create Exam
                    </v-btn>

                </v-col>

            </v-col>
            <v-col class="d-flex" cols="12" sm="3" v-if="show">
                <v-file-input label="Upload the Question"></v-file-input>

            </v-col>
            <v-col class="d-flex" cols="12" sm="4" v-if="show">
                <v-select
                    :items="items"
                    item-text="name"
                    item-value="id"
                    label="Select Exam type"
                    v-model="selectedExam"

                ></v-select>


            </v-col>
            <v-col class="d-flex" md="2"
                   v-if="show">
                <v-btn
                    :disabled="disabledQuestion"
                    @click="createQuestions"
                    style="color: white;background-color: #9652ff"
                >Create Question

                </v-btn>

            </v-col>

        </v-row>
        <br>
        <br>
        <div v-for="(creative,index) in creatives">



                    <div style="display: inline-flex;margin:5%">
                        <h4 style="color:#9652ff"> Creative Question No:{{index+1}}</h4>

                        <v-btn
                            class="error"
                            style="float: right;margin-left:5%"
                            depressed
                            @click="creativeRemove(index)"

                        >Remove
                        </v-btn>
                    </div>


            <v-textarea
                filled
                label="Story"
                rounded
                v-model="creative.story"
            ></v-textarea>
            <v-row class="d-flex">
                <v-col
                    md="3"
                >
                    <div>

                        <v-textarea
                            label="Question no 1"
                            outlined
                            rounded

                            v-model="creative.q1"
                        ></v-textarea>
                        <v-text-field
                            filled
                            label="Marks"
                            rounded
                            type="number"
                            v-model="creative.q1m"
                        ></v-text-field>
                    </div>
                </v-col>
                <v-col
                    md="3"
                >
                    <div>

                        <v-textarea
                            label="Question no 2"
                            outlined
                            rounded
                            v-model="creative.q2"
                        ></v-textarea>
                        <v-text-field
                            filled
                            label="Marks"
                            rounded
                            type="number"
                            v-model="creative.q2m"
                        ></v-text-field>
                    </div>
                </v-col>
                <v-col
                    md="3"
                >
                    <div>

                        <v-textarea
                            label="Question no 3"
                            outlined
                            rounded
                            v-model="creative.q3"
                        ></v-textarea>
                        <v-text-field
                            filled
                            label="Marks"
                            rounded
                            type="number"
                            v-model="creative.q3m"
                        ></v-text-field>
                    </div>
                </v-col>
                <v-col
                    md="3"
                >
                    <div>

                        <v-textarea
                            label="Question no 4"
                            outlined
                            rounded
                            v-model="creative.q4"
                        ></v-textarea>
                        <v-text-field
                            filled
                            label="Marks"
                            rounded
                            type="number"
                            v-model="creative.q4m"
                        ></v-text-field>
                    </div>
                </v-col>
            </v-row>
        </div>
        <div v-for="(multiple,index) in multiples">


            <div style="display: inline-flex;margin:5%">
                <h4 style="color:#9652ff"> Multiple Question No:{{index+1}}</h4>

                <v-btn
                    class="error"
                    style="float:
                    right;margin-left:5%"
                    depressed
                    @click="multipleRemove(index)"
                >Remove</v-btn>
            </div>
            <v-textarea
                filled
                label="Question"
                rounded
                v-model="multiple.qm"
            ></v-textarea>
            <v-row class="d-flex">
                <v-col
                    md="3"
                >
                    <v-textarea
                        label="Option 1"
                        outlined
                        rounded
                        v-model="multiple.op1"
                    ></v-textarea>
                </v-col>
                <v-col
                    md="3"
                >
                    <v-textarea
                        label="Option 2"
                        outlined
                        rounded
                        v-model="multiple.op2"
                    ></v-textarea>
                </v-col>
                <v-col
                    md="3"
                >
                    <v-textarea
                        label="Option 1"
                        outlined
                        rounded
                        v-model="multiple.op3"
                    ></v-textarea>
                </v-col>
                <v-col
                    md="3"
                >
                    <v-textarea
                        label="Option 2"
                        outlined
                        rounded
                        v-model="multiple.op4"
                    ></v-textarea>
                </v-col>
                <v-text-field
                    filled
                    label="Marks"
                    rounded
                    type="number"
                    v-model="multiple.qmm"
                ></v-text-field>
            </v-row>
        </div>
        <div v-for="(pool,index) in pools">


            <div style="display: inline-flex;margin:5%">
                <h4 style="color:#9652ff"> Pool Question No:{{index+1}}</h4>

                <v-btn
                    class="error"
                    style="float: right;margin-left:5%"
                    depressed
                    @click="poolRemove(index)"
                >Remove
                </v-btn>
            </div>
            <v-textarea
                filled
                label="Question"
                rounded
                v-model="pool.qp"
            ></v-textarea>
            <v-row class="d-flex">
                <v-col
                    md="3"
                >
                    <v-textarea
                        label="Option 1"
                        outlined
                        rounded
                        v-model="pool.op1"
                    ></v-textarea>
                </v-col>
                <v-col
                    md="3"
                >
                    <v-textarea
                        label="Option 2"
                        outlined
                        rounded
                        v-model="pool.op2"
                    ></v-textarea>
                </v-col>
                <v-col
                    md="3"
                >
                    <v-textarea
                        label="Option 3"
                        outlined
                        rounded
                        v-model="pool.op3"
                    ></v-textarea>
                </v-col>
                <v-col
                    md="3"
                >
                    <v-textarea
                        label="Option 4"
                        outlined
                        rounded
                        v-model="pool.op4"
                    ></v-textarea>
                </v-col>
            </v-row>

        </div>
        <div v-for="(short,index) in shorts">
            <div style="display: inline-flex;margin:5%">
                <h4 style="color:#9652ff"> Short Question No:{{index+1}}</h4>

                <v-btn
                    class="error"
                    style="float: right;margin-left:5%"
                    depressed
                    @click="shortRemove(index)"
                >
                    Remove
                </v-btn>
            </div>
            <v-textarea
                filled
                label="Question"
                rounded
                v-model="short.qs"
            ></v-textarea>
            <v-text-field
                filled
                label="Marks"
                rounded
                type="number"
                v-model="short.qsm"
            ></v-text-field>
        </div>
        <v-btn
            v-if="x"
            rounded
            class="primary"
            @click="postQuestion"
        >
            Create Question
        </v-btn>
        {{CreateQuestion}}
        {{userId}}
        {{checkingCreative}}
        {{checkingMultiple}}
        {{checkingPool}}
        {{checkingShort}}
    </v-container>
</template>
<script>


    export default {
        props:['data'],

        data: () => ({
            items: [
                {
                    name: 'Creative Question',
                    id: 1,

                },
                {
                    name: 'Multiple Question',
                    id: 2,

                },
                {
                    name: 'Poll Question',
                    id: 3,
                },
                {
                    name: 'Short Question',
                    id: 4,

                }],
            selectedExam: null,

            show: false,
            creative: false,
            multiple: false,
            pool: false,
            short:false,
            creatives:[],
            multiples:[],
            shorts:[],
            pools:[],
            form:{
                date: new Date().toISOString().substr(0, 10),
                user_id:null,
                qcc:0,
                qcm:0,
                qcp:0,
                qcs:0,
            },
            qcc:0,
            qcm:0,
            qcp:0,
            qcs:0,
            modal: false,

            x:false,
        }),
        methods: {
            postQuestion(){
                axios.post(`/lms/api/class/exam/question/${this.data}`,{
                    form:this.form,
                    creatives:this.creatives,
                    multiples:this.multiples,
                    pools:this.pools,
                    shorts: this.shorts,
                })
                    .then(res =>this.dialog=false,this.$toasted.show('Exam Created',{type:'success'}),
                        //EventBus.$emit('newMaterial',this.material)
                    )
            },
            CreateExam() {
                this.show = true;
            },
            createQuestions() {
                this.x=true;
                if (this.selectedExam == 1) {
                    this.createCreative();
                }
                if (this.selectedExam == 2) {
                    this.createMultiple();
                }
                if (this.selectedExam == 3) {
                    this.createPool();
                }
                if (this.selectedExam == 4) {
                    this.createShort();
                }

            },
            createCreative() {
                this.creatives.push({
                    story:'',
                    q1:'',
                    q1m:0,
                    q2:'',
                    q2m:0,
                    q3:'',
                    q3m:0,
                    q4:'',
                    q4m:0,

                });
                this.qcc++;

            },
            createMultiple() {
                this.multiples.push({
                    qm:'',
                    op1:'',
                    op2:'',
                    op3:'',
                    op4:'',
                    qmm:0,

                });
                this.qcm++;

            },
            createPool() {
                this.pools.push({
                    qp:'',
                    op1:'',
                    op2:'',
                    op3:'',
                    op4:'',
                });
                this.qcp++;

            },
            createShort() {
                this.shorts.push({
                    qs:'',
                    qsm:0,
                });
                this.qcs++;

            },
            creativeRemove(index){
                Vue.delete(this.creatives, index);
                this.qcc --;

            },
            multipleRemove(index){
                Vue.delete(this.multiples, index);
                this.qcm--;
            },
            poolRemove(index){
                Vue.delete(this.pools, index);
                this.qcp--;
            },
            shortRemove(index){
                Vue.delete(this.shorts, index);
                this.qcs--;

            },



        },
        computed: {
            checkingCreative(){
                if (this.qcc >0){
                    this.form.qcc=1;
                }
                else
                    this.form.qcc=0;

            },
            checkingMultiple(){
                if (this.qcm >0){
                    this.form.qcm=1;
                }
                else
                    this.form.qcm=0;

            },

            checkingPool(){
                if (this.qcp >0){
                    this.form.qcp=1;
                }
                else
                    this.form.qcp=0;

            },
            checkingShort(){
                if (this.qcs >0){
                    this.form.qcs=1;
                }
                else
                    this.form.qcs=0;

            },
            userId(){
                this.form.user_id=User.id();
            },
            Disabled() {
                if (this.form.exam != '') {
                    return false;
                } else {
                    return true;
                }
            },
            disabledQuestion() {
                if (this.multiple == true || this.creative == true || this.pool == true || this.short ==true) {
                    return false;
                } else
                    return true;

            },
            CreateQuestion() {
                if (this.selectedExam == 1) {
                    this.creative = true;
                    this.multiple = false;
                    this.pool = false;
                    this.short =false;

                } else if (this.selectedExam == 2) {
                    this.multiple = true;
                    this.creative = false;
                    this.pool = false;
                    this.short =false;

                } else if (this.selectedExam == 3) {
                    this.pool = true;
                    this.creative = false;
                    this.multiple = false;
                    this.short =false;

                }
            else if (this.selectedExam == 4) {
                    this.short =true;
                    this.pool = false;
                    this.creative = false;
                    this.multiple = false;

                }
                },

            },
        }

</script>
