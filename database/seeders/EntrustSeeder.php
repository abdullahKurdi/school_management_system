<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Faker\Factory;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //for fake data for customer
        $faker = Factory::create();

        //*************Role seeder*************
        $adminRole      = Role::create([
            'name'              =>  'admin',
            'display_name_ar'   =>  'مشرف',
            'display_name'      =>  'Administration',
            'description'       =>  'Administration',
            'allowed_route'     =>  'admin',
        ]);
        $supervisorRole = Role::create([
            'name'              =>  'supervisor',
            'display_name_ar'   =>  'موظف',
            'display_name'      =>  'Supervisor',
            'description'       =>  'Supervisor',
            'allowed_route'     =>  'admin',
        ]);
        $teacherRole    = Role::create([
            'name'               =>  'teacher',
            'display_name_ar'    =>  'معلم',
            'display_name'       =>  'Teacher',
            'description'        =>  'Teacher',
            'allowed_route'      =>  'teacher',
        ]);
        $parentRole     = Role::create([
            'name'              =>  'parent',
            'display_name_ar'   =>  'ولي امر',
            'display_name'      =>  'Parent',
            'description'       =>  'Parent',
            'allowed_route'     =>  'parent',
        ]);
        $studentRole    = Role::create([
            'name'              =>  'student',
            'display_name_ar'   =>  'طالب',
            'display_name'      =>  'Student',
            'description'       =>  'Student',
            'allowed_route'     =>  'student',
        ]);


        //*************User seeder******************
        //Add admin user
        $admin = User::create([
            'first_name'        =>  'Admin',
            'last_name'         =>  'System',
            'username'          =>  'admin',
            'email'             =>  'admin@sms.developer',
            'email_verified_at' =>  now(),
            'mobile'            =>  '962775772008',
            'user_image'        =>  'avatar.svg',
            'password'          =>  bcrypt('123456789'),
            'status'            =>  1,
            'remember_token'    =>  Str::random(10),
        ]);
        //Add supervisor user
        $supervisor = User::create([
            'first_name'        =>  'Supervisor',
            'last_name'         =>  'System',
            'username'          =>  'supervisor',
            'email'             =>  'supervisor@sms.developer',
            'email_verified_at' =>  now(),
            'mobile'            =>  '962775772009',
            'user_image'        =>  'avatar.svg',
            'password'          =>  bcrypt('123456789'),
            'status'            =>  1,
            'remember_token'    =>  Str::random(10),
        ]);
        //Add teacher user
        $teacher = User::create([
            'first_name'        =>  'teacher',
            'last_name'         =>  'System',
            'username'          =>  'teacher',
            'email'             =>  'teacher@sms.developer',
            'email_verified_at' =>  now(),
            'mobile'            =>  '962775772010',
            'user_image'        =>  'avatar.svg',
            'password'          =>  bcrypt('123456789'),
            'status'            =>  1,
            'remember_token'    =>  Str::random(10),
        ]);
        //Add student user
        $student = User::create([
            'first_name'        =>  'Student',
            'last_name'         =>  'System',
            'username'          =>  'student',
            'email'             =>  'student@sms.developer',
            'email_verified_at' =>  now(),
            'mobile'            =>  '962775772060',
            'user_image'        =>  'avatar.svg',
            'password'          =>  bcrypt('123456789'),
            'status'            =>  1,
            'remember_token'    =>  Str::random(10),
        ]);
        //Add parent user
        $parent = User::create([
            'first_name'        =>  'Parent',
            'last_name'         =>  'System',
            'username'          =>  'parent',
            'email'             =>  'parent@sms.developer',
            'email_verified_at' =>  now(),
            'mobile'            =>  '962775772460',
            'user_image'        =>  'avatar.svg',
            'password'          =>  bcrypt('123456789'),
            'status'            =>  1,
            'remember_token'    =>  Str::random(10),
        ]);


        //*************User seeder Role******************
        //Add role for admin
        $admin->attachRole($adminRole);
        //Add role for supervisor
        $supervisor->attachRole($supervisorRole);
        //Add role for teacher
        $teacher->attachRole($teacherRole);
        //Add role for student
        $student->attachRole($studentRole);
        //Add role for parent
        $parent->attachRole($parentRole);





    }
}
