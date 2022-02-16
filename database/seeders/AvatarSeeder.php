<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AvatarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('avatars')->insert([
            ["img"=>"avatar_admin.jpg","nom"=>"homme-lunette"],
            ["img"=>"avatar_homme.png" , "nom"=>"homme"],
            ["img"=>"avatar_femme.png" , "nom"=>"femme"],
            ["img"=>"avatar_roux.png" , "nom"=>"homme-roux"],
            ["img"=>"avatar_rousse.png" , "nom"=>"femme-rousse"],
        ]);
    }
}
