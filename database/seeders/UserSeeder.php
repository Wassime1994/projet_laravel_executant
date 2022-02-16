<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ["name"=>"Akachar",
            "prenom"=>"Wassime" , 
            "age"=>26 ,
            "email"=>"wassime.akachar@hotmail.com" ,
            "password"=>Hash::make('wawawawa') ,
            "role_id"=>1,
            "avatar_id"=>1
            ]
        ]) ;
    }
}
