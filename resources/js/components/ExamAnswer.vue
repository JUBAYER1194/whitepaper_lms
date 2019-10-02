<template>
    <v-container>
        <div>
            <v-row class="d-flex">
                <v-col class="d-flex" md="9">

                    <h4 class="text--center" style="background-color: #9652ff;color: white;padding-right: 1%;width: 30%;height: 70%;margin-right:3%;">Previous Exams Question:</h4>

                    <div style="display: inline-flex">
                        <v-select
                            :items="exams"
                            item-text="type"
                            item-value="type"
                            label="Select Exam type"
                            v-model="date.selected"
                        ></v-select>
                    </div>
                </v-col>
                <v-col class="d-flex" md="3">
                    <div class="text--right">
                        <v-btn
                            style="background-color:#9652ff;color: white"
                            @click="show=true"
                        >
                            Start Exam
                        </v-btn>
                    </div>
                </v-col>
            </v-row>
            <div v-if="show==true"  v-for="(questions_s,index) in start_exam">
                <div v-for="(question_s_s,index) in questions_s.question_s">

                    <div v-for="(creative_s,index) in question_s_s.creative_s_s" v-if="question_s_s.type=='Creative'">
                        <div>
                            <div style="display: inline-flex;margin:5%">
                                <h4 style="color:#9652ff"> Creative Question No:{{index+1}}</h4>

                            </div>
                            <v-textarea
                                disabled
                                filled
                                label="Story"
                                rounded
                                v-model="creative_s.story"
                            ></v-textarea>

                                    <div>

                                        <v-textarea
                                            disabled
                                            label="Question no 1"
                                            outlined
                                            rounded
                                            v-model="creative_s.question_1"
                                        ></v-textarea>
                                        <v-text-field
                                            disabled
                                            filled
                                            label="Marks"
                                            rounded
                                            type="number"
                                            v-model="creative_s.q1_marks"
                                        ></v-text-field>
                                        <v-textarea
                                            label="Answer for Question no 1"
                                            outlined
                                            rounded
                                            v-model="creative.answer1"
                                        ></v-textarea>
                                    </div>


                                    <div>

                                        <v-textarea
                                            disabled
                                            label="Question no 2"
                                            outlined
                                            rounded
                                            v-model="creative_s.question_2"
                                        ></v-textarea>
                                        <v-text-field
                                            disabled
                                            filled
                                            label="Marks"
                                            rounded
                                            type="number"
                                            v-model="creative_s.q2_marks"
                                        ></v-text-field>
                                        <v-textarea
                                            label="Answer For Question no 2"
                                            outlined
                                            rounded
                                            v-model="creative.answer2"
                                        ></v-textarea>
                                    </div>

                                    <div>

                                        <v-textarea
                                            disabled
                                            label="Question no 3"
                                            outlined
                                            rounded
                                            v-model="creative_s.question_3"
                                        ></v-textarea>
                                        <v-text-field
                                            disabled
                                            filled
                                            label="Marks"
                                            rounded
                                            type="number"
                                            v-model="creative_s.q3_marks"
                                        ></v-text-field>
                                        <v-textarea
                                            label="Answer For Question no 3"
                                            outlined
                                            rounded
                                            v-model="creative.answer3"
                                        ></v-textarea>
                                    </div>

                                    <div>

                                        <v-textarea
                                            disabled
                                            label="Question no 4"
                                            outlined
                                            rounded
                                            v-model="creative_s.question_4"
                                        ></v-textarea>
                                        <v-text-field
                                            disabled
                                            filled
                                            label="Marks"
                                            rounded
                                            type="number"
                                            v-model="creative_s.q4_marks"
                                        ></v-text-field>
                                        <v-textarea
                                            label="Answer For Question no 4"
                                            outlined
                                            rounded
                                            v-model="creative.answer4"
                                        ></v-textarea>
                                    </div>

                        </div>
                        <div class="text--center"></div>
                        <v-btn  @click="creative_answer(creative_s.id)"> send </v-btn>

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
                        <div>
                            <v-select
                                :items=[multiple_s.option_1,multiple_s.option_2,multiple_s.option_3,multiple_s.option_4]
                                label="Choose your Answer"
                                solo
                            ></v-select>
                        </div>

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
                        <v-textarea
                            filled
                            label="Answer for Short question"
                            rounded
                        ></v-textarea>

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
                        <v-select
                            :items=[poll_s.option_1,poll_s.option_2,poll_s.option_3,poll_s.option_4]
                            label="Choose your Answer"
                            solo
                        ></v-select>

                    </div>
                </div>

            </div>

            <div v-if="show==false" >
                <div v-for="(questions_s,index) in dailyexam">
                    <div v-for="(question_s_s,index) in questions_s.question_s">

                        <div v-for="(creative_s,index) in question_s_s.creative_s_s" v-if="question_s_s.type=='Creative'">
                            <div>
                                <div style="display: inline-flex;margin:5%">
                                    <h4 style="color:#9652ff"> Creative Question No:{{index+1}}</h4>

                                </div>
                                <v-textarea
                                    disabled
                                    filled
                                    label="Story"
                                    rounded
                                    v-model="creative_s.story"
                                ></v-textarea>
                                <v-row class="d-flex">
                                    <v-col
                                        md="3"
                                    >
                                        <div>

                                            <v-textarea
                                                disabled
                                                label="Question no 1"
                                                outlined
                                                rounded
                                                v-model="creative_s.question_1"
                                            ></v-textarea>
                                            <v-text-field
                                                disabled
                                                filled
                                                label="Marks"
                                                rounded
                                                type="number"
                                                v-model="creative_s.q1_marks"
                                            ></v-text-field>
                                        </div>
                                    </v-col>
                                    <v-col
                                        md="3"
                                    >
                                        <div>

                                            <v-textarea
                                                disabled
                                                label="Question no 2"
                                                outlined
                                                rounded
                                                v-model="creative_s.question_2"
                                            ></v-textarea>
                                            <v-text-field
                                                disabled
                                                filled
                                                label="Marks"
                                                rounded
                                                type="number"
                                                v-model="creative_s.q2_marks"
                                            ></v-text-field>
                                        </div>
                                    </v-col>
                                    <v-col
                                        md="3"
                                    >
                                        <div>

                                            <v-textarea
                                                disabled
                                                label="Question no 3"
                                                outlined
                                                rounded
                                                v-model="creative_s.question_3"
                                            ></v-textarea>
                                            <v-text-field
                                                disabled
                                                filled
                                                label="Marks"
                                                rounded
                                                type="number"
                                                v-model="creative_s.q3_marks"
                                            ></v-text-field>
                                        </div>
                                    </v-col>
                                    <v-col
                                        md="3"
                                    >
                                        <div>

                                            <v-textarea
                                                disabled
                                                label="Question no 4"
                                                outlined
                                                rounded
                                                v-model="creative_s.question_4"
                                            ></v-textarea>
                                            <v-text-field
                                                disabled
                                                filled
                                                label="Marks"
                                                rounded
                                                type="number"
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
            </div>

        </div>


        {{puttingExam}}
        {{filteredExams}}
        {{startexam}}

    </v-container>
</template>
<script>


    export default {
        props: ['data', 'exam'],

        data: () => ({
            dailyexam: {},
            date: {
                selected: null,
            },
            show: false,
            exams: {},
            start_exam: {},
            start_exam_status: 1,
            ex: {},

            creatives:
                [

            creative:
                    {
                        answer1: '',
                        answer2: '',
                        answer3: '',
                        answer4: '',
                    },

            ],




        }),


        methods: {
            creative_answer(x){
                this.creatives.push({
                    answer1:this.creative.answer1,
                    answer2:this.creative.answer2,
                    answer3:this.creative.answer3,
                    answer4:this.creative.answer4,
                    question_no: x,
                });


            },

        },
        computed: {


            filteredExams: function () {
                this.dailyexam = this.exams.filter((exam) => {
                    return exam.type.match(this.date.selected);
                });
            },

            puttingExam() {
                this.exams = this.exam;
            },
            startexam: function () {
                this.start_exam=this.exams.filter((el) => {
                    return (el.status_s == this.start_exam_status)
                });

            },


        },
    }

</script>
