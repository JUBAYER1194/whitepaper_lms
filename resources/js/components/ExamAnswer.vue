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
                <div v-if="checkShow && showingStartExam && showStartExam ||showExam">
                <v-col  class="d-flex" md="3">
                    <div class="text--right">
                        <v-btn
                            style="background-color:#9652ff;color: white"
                            @click="exam_done_Change"
                        >
                            Start Exam
                        </v-btn>
                    </div>
                </v-col>
                </div>
            </v-row>
            <div v-if="checkShow==false && showingStartExam && showStartExam ||showExam">
                <div v-if="distance > 0">{{`${days}d ${hours}h ${minutes}m ${seconds}s`}}</div>
                <div v-else style="color: darkred">OVER</div>
            </div>
            <div v-if="show==true">
                <div>
                    <div v-for="(questions_s,index) in start_exam" v-if="show==true">
                        <div v-for="(question_s_s,index) in questions_s.question_s">
                            <div v-for="(creative_s,index) in question_s_s.creative_s_s" v-if="question_s_s.type=='Creative'">



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
                                        :label="'question no '+(index+1)+'(a)'"
                                        disabled
                                        outlined
                                        rounded
                                        v-model="creative_s.question_1"

                                    ></v-textarea>
                                    <v-text-field
                                        :label="'marks for '+(index+1)+'(a)'"
                                        disabled
                                        filled
                                        rounded
                                        type="number"
                                        v-model="creative_s.q1_marks"
                                    ></v-text-field>
                                    <v-textarea
                                        :label="'Answer for '+(index+1)+'(a)'"
                                        filled
                                        rounded
                                        type="text"
                                        v-model="creativenesss[index].answer1"
                                        @click="checkingQuestionId(index,creative_s.id,creative_s.question_id)"
                                    ></v-textarea>
                                </div>


                                <div>

                                    <v-textarea
                                        :label="'question no '+(index+1)+'(b)'"
                                        disabled
                                        outlined
                                        rounded
                                        v-model="creative_s.question_2"
                                    ></v-textarea>
                                    <v-text-field
                                        :label="'Marks for '+(index+1)+'(b)'"
                                        disabled
                                        filled
                                        rounded
                                        type="number"
                                        v-model="creative_s.q2_marks"
                                    ></v-text-field>
                                    <v-textarea
                                        :label="'Answer for '+(index+1)+'(b)'"
                                        filled
                                        rounded
                                        type="text"
                                        v-model="creativenesss[index].answer2"
                                        @click="checkingQuestionId(index,creative_s.id,creative_s.question_id)"
                                    ></v-textarea>
                                </div>

                                <div>

                                    <v-textarea
                                        :label="'question no '+(index+1)+'(c)'"
                                        disabled
                                        outlined
                                        rounded
                                        v-model="creative_s.question_3"
                                    ></v-textarea>
                                    <v-text-field
                                        :label="'marks for '+(index+1)+'(c)'"
                                        disabled
                                        filled
                                        rounded
                                        type="number"
                                        v-model="creative_s.q3_marks"
                                    ></v-text-field>
                                    <v-textarea
                                        :label="'Answer for '+(index+1)+'(c)'"
                                        filled
                                        rounded
                                        type="text"
                                        v-model="creativenesss[index].answer3"
                                        @click="checkingQuestionId(index,creative_s.id,creative_s.question_id)"
                                    ></v-textarea>
                                </div>

                                <div>

                                    <v-textarea
                                        :label="'question no '+(index+1)+'(d)'"
                                        disabled
                                        outlined
                                        rounded
                                        v-model="creative_s.question_4"
                                    ></v-textarea>
                                    <v-text-field
                                        :label="'marks for '+(index+1)+'(d)'"
                                        disabled
                                        filled
                                        rounded
                                        type="number"
                                        v-model="creative_s.q4_marks"
                                    ></v-text-field>
                                    <v-textarea
                                        :label="'Answer for '+(index+1)+'(d)'"
                                        filled
                                        rounded
                                        type="text"
                                        v-model="creativenesss[index].answer4"
                                        @click="checkingQuestionId(index,creative_s.id,creative_s.question_id)"
                                    ></v-textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div v-for="(questions_s,index) in start_exam" v-if="show==true">
                    <div v-for="(question_s_s,index) in questions_s.question_s">
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
                            <v-text-field
                                disabled
                                filled
                                label="Marks"
                                rounded
                                v-model="multiple_s.marks"
                            ></v-text-field>
                            <div>
                                <v-select
                                    :items=[multiple_s.option_1,multiple_s.option_2,multiple_s.option_3,multiple_s.option_4]
                                    label="Choose your Answer"
                                    v-model="multiplesss[index].answer"
                                    @change="checkingQuestionIdmultipule(index,multiple_s.id,multiple_s.question_id)"
                                    solo
                                ></v-select>
                            </div>

                        </div>
                    </div>
                </div>
                <div v-for="(questions_s,index) in start_exam" v-if="show==true">
                    <div v-for="(question_s_s,index) in questions_s.question_s">
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
                                label="Write Your Answer"
                                rounded
                                v-model="shortsss[index].answer"
                                @change="checkingQuestionIdshort(index,short_s.id,short_s.question_id)"
                            ></v-textarea>

                        </div>
                    </div>
                </div>
                <div v-for="(questions_s,index) in start_exam" v-if="show==true">
                    <div v-for="(question_s_s,index) in questions_s.question_s">
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
                            <v-select
                                :items=[poll_s.option_1,poll_s.option_2,poll_s.option_3,poll_s.option_4]
                                label="Choose your Answer"
                                v-model="pollsss[index].answer"
                                @change="checkingQuestionIdpoll(index,poll_s.id,poll_s.question_id)"
                                solo
                            ></v-select>

                        </div>
                    </div>
                </div>

                <v-btn @click="submitAnswer"  style="color: white;background-color: #9652ff">
                    Post Question
                </v-btn>
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
        <div v-for="(exam_start,index) in start_exam">

            {{gettingExamDate(exam_start.end_date_s,exam_start.end_time_s,exam_start.id)}}
            <div v-for="exam_done_statuses in exam_start.exam_done_Status" v-if="exam_done_statuses.pivot.user_id==user_id">

                {{checkingPivot(exam_done_statuses.pivot.exam_done)}}
            </div>

        </div>
        {{checkingUser}}
        {{userId}}
        {{puttingExam}}
        {{filteredExams}}
        {{startexam}}
        {{filteredQuestionc}}
        {{filteredQuestionm}}
        {{filteredQuestionp}}
        {{filteredQuestions}}
        {{checingcountdown}}
       {{checkingUser_startExam}}
        {{submitAnswer_distance}}

    </v-container>
</template>
<script>


    import User from "../Helpers/User";

    export default {
        props: ['data', 'exam1'],

        data: () => ({
            dailyexam: {},
            date: {
                selected: null,
            },
            show: false,
            exams: {},
            start_exam: {},
            start_exam_status: 1,
            filteringc:{},
            filteringm:{},
            filterings:{},
            filteringp:{},
            question_id:{
                qcreative_id:null,
                qmultiple_id:null,
                qshort_id:null,
                qpoll_id:null,
                user_id:null,
            },
            dates:null,
            times:null,
            some:"",
            countDownDate:null,
            days: 0,
            hours: 0,
            minutes: 0,
            seconds: 0,
            distance: 0,
            showingStartExam:false,
            checkShow:true,
            student_start_exam:{},
            user_id:null,
            exam_done_done:5,
            showStartExam:false,
            showExam:false,
            startExam_id:null,





            creativenesss: [{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},{question_id:0,answer1:null,answer2:null,answer3:null,answer4:null},],
            multiplesss: [{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,}],
            shortsss: [{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,}],
            pollsss: [{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,},{question_id:0,}],
        }),
        mounted(){

            var vm = this
            var x = setInterval(function() {
                var now = new Date().getTime();
                vm.distance = vm.countDownDate - now;
                vm.days = Math.floor(vm.distance / (1000 * 60 * 60 * 24));
                vm.hours = Math.floor((vm.distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                vm.minutes = Math.floor((vm.distance % (1000 * 60 * 60)) / (1000 * 60));
                vm.seconds = Math.floor((vm.distance % (1000 * 60)) / 1000);

            }, 1000);
        },



        methods: {
            exam_done_Change(){
                axios.post(`/lms/api/class/exam/exam_done/${this.startExam_id}`,{
                   user_id:this.user_id,
                    check:this.exam_done_done,


                })
                    .then(res =>this.dialog=false,this.$toasted.show('Exam Started',{type:'success'}),
                        this.show=true,
                        this.checkShow=false,

                    )
            },
            gettingExamDate(data,data1,id){
                this.dates=data;
                this.times=data1;
                this.startExam_id=id;
            },

            checkingPivot(data){
              this.exam_done_done=data;
            },
            updating_Examuser(){
                axios.patch(`/lms/api/class/exam/updating_Examuser/${this.startExam_id}`,{
                    user_id:this.user_id,
                    check:this.exam_done_done,
                })

            },

            submitAnswer(){
                this.updating_Examuser();
                axios.post(`/lms/api/class/exam/answer/${this.data}`,{
                    form:this.question_id,
                    Acreatives:this.filteringc,
                    Amultiples:this.filteringm,
                    Apools:this.filteringp,
                    Ashorts: this.filterings,

                })
                    .then(res =>this.dialog=false,this.$toasted.show('Exam Done',{type:'success'}),
                      window.location.reload(true)
                    )
            },
            checkingQuestionId(index,id,question_id){
                this.creativenesss[index].question_id=id;
                this.question_id.qcreative_id=question_id;
            },
            checkingQuestionIdmultipule(index,id,question_id){
                this.multiplesss[index].question_id=id;
                this.question_id.qmultiple_id=question_id;
            },
            checkingQuestionIdshort(index,id,question_id){
                this.shortsss[index].question_id=id;
                this.question_id.qshort_id=question_id;
            },
            checkingQuestionIdpoll(index,id,question_id){
                this.pollsss[index].question_id=id;
                this.question_id.qpoll_id=question_id;
            },





        },
        computed: {
            submitAnswer_distance(){
                if (this.distance<0){
                    this.updating_Examuser();
                    axios.post(`/lms/api/class/exam/answer/${this.data}`,{
                        form:this.question_id,
                        Acreatives:this.filteringc,
                        Amultiples:this.filteringm,
                        Apools:this.filteringp,
                        Ashorts: this.filterings,
                        user_id:this.user_id,
                        check:this.exam_done_done,
                        start_exam_id:this.startExam_id,

                    })
                        .then(res =>this.dialog=false,this.$toasted.show('Exam Done',{type:'success'}),
                            window.location.reload(true)
                        )
                }
            },
            checkingUser_startExam(){
                if (this.exam_done_done== 5 || this.exam_done_done== 0){
                    this.showStartExam=true;
                }
                else
                {
                    this.showStartExam=false;
                }

            },

            checkingUser(){
                this.user_id=User.id();
            },


            checingcountdown(){
                this.some=this.dates+" "+this.times;
                this.countDownDate=new Date(this.some).getTime();
            },
            userId(){
                this.question_id.user_id=User.id();
            },
            filteredExams: function () {
                this.dailyexam = this.exams.filter((exam) => {
                    return exam.type.match(this.date.selected);
                });
            },
            filteredQuestionc: function () {
                this.filteringc = this.creativenesss.filter((el) => {
                    return (el.question_id !=0)
                });
            },
            filteredQuestionm: function () {
                this.filteringm = this.multiplesss.filter((el) => {
                    return (el.question_id !=0)
                });
            },
            filteredQuestionp: function () {
                this.filteringp = this.pollsss.filter((el) => {
                    return (el.question_id !=0)
                });
            },
            filteredQuestions: function () {
                this.filterings = this.shortsss.filter((el) => {
                    return (el.question_id !=0)
                });
            },

            puttingExam() {
                this.exams = this.exam1;
            },
            startexam: function () {
                this.start_exam=this.exams.filter((el) => {
                    if (el.status_s == this.start_exam_status && el.exam_done == 0){
                        this.showingStartExam=true;
                    }
                    return (el.status_s == this.start_exam_status && el.exam_done == 0)
                });


            },




        },
    }

</script>
