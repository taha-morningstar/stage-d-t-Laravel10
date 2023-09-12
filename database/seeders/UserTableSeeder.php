<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           //Admin
            [
            'name'=>'Admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make(111),  
            'profile' => 'admin',
            'status' => 'active',
            ], 
            //developpeur >>> user
            [
            'name'=>'developpeur',
            'username'=>'developpeur',
            'email'=>'developpeur@gmail.com',
            'password'=>Hash::make(111),  
            'profile' => 'developpeur',
            'status' => 'active',
            ],
            //responsable >>> agent
            [
            'name'=>'responsable',
            'username'=>'responsable',
            'email'=>'responsable@gmail.com',
            'password'=>Hash::make(111),  
            'profile' => 'responsable',
            'status' => 'active',
            ]
        ]);
    }
}
