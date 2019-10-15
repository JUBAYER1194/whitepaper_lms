<template>
    <v-container>
        <div style="display: inline-flex">
            <v-select
                :items="exams"
                item-text="type"
                item-value="type"
                label="Select Exam type"
                v-model="date.selected"
        ></v-select>
        </div>
<!--        <div v-for="(examx,index) in examR" v-if="examx.exam_done==0 && examx.status_s==0">-->
<!--            {{checkingstartexam(examx)}}-->
<!--        </div>-->
        <div v-if="somex && examn!=''" >
            <div style="display: inline-flex">
            <v-select
                :items="examn"
                item-text="type"
                item-value="id"
                label="Start Exam"
                rounded
                filled
                type="text"
                v-model="examsatrtId"
            ></v-select>
            </div>
            <v-row class="d-flex">
            <v-col class="d-flex"
            md="4">
                <v-dialog
                    ref="dialog"
                    v-model="modal1"
                    :return-value.sync="date1"
                    persistent
                    width="290px"
                >
                    <template v-slot:activator="{ on }">
                        <v-text-field
                            v-model="date1"
                            label="exam finish Date"
                            prepend-icon="event"
                            readonly
                            v-on="on"
                        ></v-text-field>
                    </template>
                    <v-date-picker v-model="date1" scrollable>
                        <div class="flex-grow-1"></div>
                        <v-btn text color="primary" @click="modal1 = false">Cancel</v-btn>
                        <v-btn text color="primary" @click="$refs.dialog.save(date1)">OK</v-btn>
                    </v-date-picker>
                </v-dialog>
            </v-col>

            <v-col class="d-flex"
                   md="4">
                <v-menu
                    ref="menu"
                    v-model="menu2"
                    :close-on-content-click="false"
                    :nudge-right="40"
                    :return-value.sync="time"
                    transition="scale-transition"
                    offset-y
                    max-width="290px"
                    min-width="290px"
                >
                    <template v-slot:activator="{ on }">
                        <v-text-field
                            v-model="time"
                            label="Exam Finish Time"
                            prepend-icon="access_time"
                            readonly
                            v-on="on"
                        ></v-text-field>
                    </template>
                    <v-time-picker
                        v-if="menu2"
                        v-model="time"
                        full-width
                        @click:minute="$refs.menu.save(time)"
                    ></v-time-picker>
                </v-menu>



            </v-col>
            <v-col class="d-flex"
                   md="4"
            >
                <v-btn @click="createStartExam" style="color:white;background-color: #9652ff">
                    Start Exam

                </v-btn>

            </v-col>
        </v-row>
        </div>


            <div v-for="(examx,index) in examR" v-if="examx.status_s==1 && examx.exam_done==0">
                {{startingtime(examx.end_date_s,examx.end_time_s,examx.id)}}
            <v-row class="d-flex">
                <v-col
                    class="d-flex"
                    md="4"
                >
            <v-text-field
                filled
                label="exam on going"
                rounded
                type="text"
                disabled
                v-model="examx.type"
            ></v-text-field>
                </v-col>

                <v-col
                    class="d-flex"
                    md="4"
                >
                    <div>
                        <div v-if="distance > 0">{{`${days}d ${hours}h ${minutes}m ${seconds}s`}}</div>
                        <div v-else style="color: darkred">OVER</div>
                    </div>
                </v-col>
                <v-col
                    class="d-flex"
                    md="4"
                >
                    <v-btn @click="stopingRunningExam(examx.id)" style="color: white;background-color: #9652ff">
                        Stop Exam
                    </v-btn>

                </v-col>

            </v-row>
            </div>



        <v-row class="d-flex" >
            <v-col
                class="d-flex"
                md="3"
            >
                <v-col
                    class="d-flex"
                    md="7"
                >
                    <dilog> </dilog>

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
            <v-btn
                @click="show=false"
                class="error"
                rounded
                v-if="x && show"
            >
                cancel
            </v-btn>

        </v-row>
        <br>
        <br>
        <div v-if="show">
            <div v-for="(creative,index) in creatives">


                <div style="display: inline-flex;margin:5%">
                    <h4 style="color:#9652ff"> Creative Question No:{{index+1}}</h4>

                    <v-btn
                        @click="creativeRemove(index)"
                        class="error"
                        depressed
                        style="float: right;margin-left:5%"

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
                        @click="multipleRemove(index)"
                        class="error"
                        depressed
                        style="float:
                    right;margin-left:5%"
                    >Remove
                    </v-btn>
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
            <div v-for="(short,index) in shorts">
                <div style="display: inline-flex;margin:5%">
                    <h4 style="color:#9652ff"> Short Question No:{{index+1}}</h4>

                    <v-btn
                        @click="shortRemove(index)"
                        class="error"
                        depressed
                        style="float: right;margin-left:5%"
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
            <div v-for="(pool,index) in pools">


                <div style="display: inline-flex;margin:5%">
                    <h4 style="color:#9652ff"> Pool Question No:{{index+1}}</h4>

                    <v-btn
                        @click="poolRemove(index)"
                        class="error"
                        depressed
                        style="float: right;margin-left:5%"
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
        </div>
        <div style="display: inline-block">
            <v-btn
                @click="postQuestion"
                class="primary"
                rounded
                v-if="x && show"
            >
                Create Question
            </v-btn>
            <v-btn
                @click="show=false"
                class="error"
                rounded
                v-if="x && show"
            >
                cancel
            </v-btn>
        </div>


        <div v-for="(questions_s,index) in dailyexam" v-if="show==false">
            <h1>{{checkingexamid(questions_s.id)}}</h1>
            <div v-for="(question_s_s,index) in questions_s.question_s">

        <div v-if="question_s_s.type=='Creative'" v-for="(creative_s,index) in question_s_s.creative_s_s">
            <div>
                <div style="display: inline-flex;margin:5%">
                    <h4 style="color:#9652ff"> Creative Question No:{{index+1}}</h4>

                </div>
                <v-textarea
                    filled
                    label="Story"
                    rounded
                    disabled
                    v-model="creative_s.story"
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
                                disabled
                                v-model="creative_s.question_1"
                            ></v-textarea>
                            <v-text-field
                                filled
                                label="Marks"
                                rounded
                                type="number"
                                disabled
                                v-model="creative_s.q1_marks"
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
                                disabled
                                v-model="creative_s.question_2"
                            ></v-textarea>
                            <v-text-field
                                filled
                                label="Marks"
                                rounded
                                type="number"
                                disabled
                                v-model="creative_s.q2_marks"
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
                                disabled
                                v-model="creative_s.question_3"
                            ></v-textarea>
                            <v-text-field
                                filled
                                label="Marks"
                                rounded
                                type="number"
                                disabled
                                v-model="creative_s.q3_marks"
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
                                disabled
                                v-model="creative_s.question_4"
                            ></v-textarea>
                            <v-text-field
                                filled
                                label="Marks"
                                rounded
                                type="number"
                                disabled
                                v-model="creative_s.q4_marks"
                            ></v-text-field>
                        </div>
                    </v-col>
                </v-row>
            </div>
        </div>


                <div v-for="(multiple_s,index) in question_s_s.multiple_s_s" v-if="question_s_s.type=='Multiple'">
                    <div style="display: inline-flex;margin:5%">
                        <h4 style="color:#9652ff"> Multiple Question No:{{index+1}}</h4>

                    </div>
                    <v-textarea
                        disabled
                        filled
                        label="Question"
                        rounded
                        v-model="multiple_s.question_s"
                    ></v-textarea>
                    <v-row class="d-flex">
                        <v-col
                            md="3"
                        >
                            <v-textarea
                                disabled
                                label="Option 1"
                                outlined
                                rounded
                                v-model="multiple_s.option_1"
                            ></v-textarea>
                        </v-col>
                        <v-col
                            md="3"
                        >
                            <v-textarea
                                disabled
                                label="Option 2"
                                outlined
                                rounded
                                v-model="multiple_s.option_2"
                            ></v-textarea>
                        </v-col>
                        <v-col
                            md="3"
                        >
                            <v-textarea
                                disabled
                                label="Option 3"
                                outlined
                                rounded
                                v-model="multiple_s.option_3"
                            ></v-textarea>
                        </v-col>
                        <v-col
                            md="3"
                        >
                            <v-textarea
                                disabled
                                label="Option 4"
                                outlined
                                rounded
                                v-model="multiple_s.option_4"
                            ></v-textarea>
                        </v-col>
                        <v-text-field
                            disabled
                            filled
                            label="Marks"
                            rounded
                            type="number"
                            v-model="multiple_s.marks"
                        ></v-text-field>
                    </v-row>
                </div>
                <div v-for="(short_s,index) in question_s_s.short_s_s" v-if="question_s_s.type=='Short'">
                    <div style="display: inline-flex;margin:5%">
                        <h4 style="color:#9652ff"> Short Question No:{{index+1}}</h4>

                    </div>
                    <v-textarea
                        disabled
                        filled
                        label="Question"
                        rounded
                        v-model="short_s.question_s"
                    ></v-textarea>
                    <v-text-field
                        disabled
                        filled
                        label="Marks"
                        rounded
                        type="number"
                        v-model="short_s.marks"
                    ></v-text-field>
                </div>
                <div v-for="(poll_s,index) in question_s_s.poll_s_s" v-if="question_s_s.type=='Pool'">


                    <div style="display: inline-flex;margin:5%">
                        <h4 style="color:#9652ff"> Pool Question No:{{index+1}}</h4>

                    </div>
                    <v-textarea
                        disabled
                        filled
                        label="Question"
                        rounded
                        v-model="poll_s.question_s"
                    ></v-textarea>
                    <v-row class="d-flex">
                        <v-col
                            md="3"
                        >
                            <v-textarea
                                disabled
                                label="Option 1"
                                outlined
                                rounded
                                v-model="poll_s.option_1"
                            ></v-textarea>
                        </v-col>
                        <v-col
                            md="3"
                        >
                            <v-textarea
                                disabled
                                label="Option 2"
                                outlined
                                rounded
                                v-model="poll_s.option_2"
                            ></v-textarea>
                        </v-col>
                        <v-col
                            md="3"
                        >
                            <v-textarea
                                disabled
                                label="Option 3"
                                outlined
                                rounded
                                v-model="poll_s.option_3"
                            ></v-textarea>
                        </v-col>
                        <v-col
                            md="3"
                        >
                            <v-textarea
                                disabled
                                label="Option 4"
                                outlined
                                rounded
                                v-model="poll_s.option_4"
                            ></v-textarea>
                        </v-col>
                    </v-row>

                </div>
            </div>

        </div>



        {{CreateQuestion}}
        {{userId}}
        {{checkingCreative}}
        {{checkingMultiple}}
        {{checkingPool}}
        {{checkingShort}}
        {{puttingExam}}
        {{filteredExams}}
        {{filteredExamRunning}}
        {{filteredExamstartRunning}}
        {{exactTime}}
        {{timeout}}

    </v-container>
</template>
<script>
    import dilog from "./CreateExamDateDilog";

    export default {

        props:['data','exam'],
        components: {dilog},

        data: () => ({

                time: null,
                menu2: false,
                modal2: false,
                date1: new Date().toISOString().substr(0, 10),
                modal1: false,
            dailyexam:{},
            date:{
              selected:null,
            },
            examShow:false,
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
                    name: 'Short Question',
                    id: 4,
                },
                {

                    name: 'Poll Question',
                    id: 3,

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
                date: null,
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
            exams:{},

            x:false,

            examId:null,
            examR:null,
            end_date:null,
            end_time:null,
            exact_time:null,
            countDownDate:null,
            days: 0,
            hours: 0,
            minutes: 0,
            seconds: 0,
            distance: 0,
            examIDs:null,
            examsatrtId:null,
            examn:null,
            somex:true,
        }),
        created(){
          this.listen();
        },
        mounted(){

            var vm = this
            var x = setInterval(function() {
                var now = new Date().getTime();
                vm.distance = vm.countDownDate - now;
                vm.days = Math.floor(vm.distance / (1000 * 60 * 60 * 24));
                vm.hours = Math.floor((vm.distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                vm.minutes = Math.floor((vm.distance % (1000 * 60 * 60)) / (1000 * 60));
                vm.seconds = Math.floor((vm.distance % (1000 * 60)) / 1000);
                // if (vm.distance < 0) {
                //     if(vm.distance < - 1000 * 60 * 60* 24){ // if its past the "game day"
                //         // reset timer to next year
                //         vm.countDownDate += (1000 * 60 * 60 * 24 * 1) * 365
                //
                //     }
                // }


            }, 1000);
        },



        methods: {
            stopingRunningExam(id){
                axios.patch(`/lms/api/class/exam/stop/${id}`,{



                })
                    .then(res =>this.dialog=false,this.$toasted.show('Exam Stoped',{type:'success'}),
                        window.location.reload(true)
                    )
            },

            listen(){
                EventBus.$on('exam_date',(x) =>{
                    this.form.date=x;
                })
            },
            startingtime(end_date_s,end_time_s,Id){
                this.end_date=end_date_s;
                this.end_time=end_time_s;
                this.examIDs=Id;
                this.somex=false;
            },
            checkingexamid(id){
                this.examId=id;
            },
            createStartExam(){
                axios.patch(`/lms/api/class/exam/${this.examsatrtId}`,{
                    end_date:this.date1,
                    end_time:this.time,
                    status:1,


                })
                    .then(res =>this.dialog=false,this.$toasted.show('Exam Started',{type:'success'}),
                       window.location.reload(true)
                    )
            },

            postQuestion(){
                axios.post(`/lms/api/class/exam/question/${this.data}`,{
                    form:this.form,
                    creatives:this.creatives,
                    multiples:this.multiples,
                    pools:this.pools,
                    shorts: this.shorts,

                })
                    .then(res =>this.dialog=false,this.$toasted.show('Exam Created',{type:'success'}),
                        window.location.reload(true)
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
        watch:{

        },
        computed: {

            timeout(){
                if(this.distance<0){
                    axios.patch(`/lms/api/class/end_exam/${this.examIDs}`,{
                        exam_done:1,


                    })
                        .then(res =>this.dialog=false,this.$toasted.show('Exam Started',{type:'success'}),
                           window.location.reload(true)
                        )

                }
            },

            exactTime(){
              this.exact_time=this.end_date+" "+this.end_time;
              this.countDownDate=new Date(this.exact_time).getTime();
            },

            filteredExamRunning: function(){
                this.examR=this.exams.filter((el) => {
                    return (el.exam_done==0);

                });

            },
            filteredExamstartRunning: function(){
                this.examn=this.examR.filter((el) => {
                    return (el.exam_done==0 && el.status_s==0);

                });

            },
            filteredExams: function(){
                 this.dailyexam=this.exams.filter((exam) => {
                     return exam.type.match(this.date.selected);

                });

            },

            Examdisabled(){
                if (this.date.selected!=null){
                    return false;
                }
                else{
                    return true;
                }
            },
            puttingExam(){
              this.exams=this.exam;
            },
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
