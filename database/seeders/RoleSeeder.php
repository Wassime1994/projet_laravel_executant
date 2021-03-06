<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                "role"=>"admin",
                "created_at"=>now() ,
            ] ,
            [
                "role"=>"webmaster",
                "created_at"=>now()
            ] , 
            [
                "role"=>"invite",
                "created_at"=>now()
            ]
        ]) ;
    }
}
