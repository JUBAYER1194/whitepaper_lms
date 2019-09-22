<?php

use App\Lmsclass;
use App\Material;
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

   }
}
