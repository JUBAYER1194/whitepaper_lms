<?php

use App\Exam;
use App\Lmsclass;
use App\Material;
use App\Qcreative;
use App\Qmultiple;
use App\Qpoll;
use App\Question;
use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\User::class,10)->create();
        factory(App\Announcement::class,10)->create();
        factory(App\Assaignment::class,10)->create();
        factory(Lmsclass::class,10)->create();
        factory(Material::class,10)->create();
//        factory(Exam::class,3)->create();
//        factory(Question::class,3)->create();
        factory(Qcreative::class,3)->create();
        factory(Qmultiple::class,3)->create();
        factory(Qpoll::class,3)->create();
       Role::create([
           'name'=>'Super Admin'
       ]);
        Role::create([
            'name'=>'Admin'
        ]);
        Role::create([
            'name'=>'Teacher'
        ]);
        Role::create([
            'name'=>'Student'
        ]);

        User::create([
            'first_name'=>'Whitepaper',
            'email'=>'admin@whitepaper.tech',
            'password'=>'whitepaper'


        ]);
        Exam::create([
            'teacher_id'=>1,
            'class_id'=>1,
            'type' =>1,
            'status'=>1,

        ]);
        Exam::create([
            'teacher_id'=>1,
            'class_id'=>1,
            'type' =>2,
            'status'=>1,
        ]);
        Exam::create([
            'teacher_id'=>1,
            'class_id'=>1,
            'type' =>3,
            'status'=>1,
        ]);
        Question::create([

              'exam_id'=>1,
               'type'=>'1',
            ]);
        Question::create([
            'exam_id'=>1,
            'type'=>'2',

        ]);
        Question::create([

            'exam_id'=>1,
            'type'=>'3',
        ]);


   }
}
