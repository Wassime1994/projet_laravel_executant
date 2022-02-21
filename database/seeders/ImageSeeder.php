<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            ['img'=>"gallery/goten.png",
            "description"=>"Sangoten",
            "categorie_id"=>1 ,
            ],

            ['img'=>"gallery/goku.png" ,
            "description"=>"Sangoku",
            "categorie_id"=>1 ,
        ],

            ['img'=>"gallery/gohan.jpg",
            "description"=> "Sangohan" ,
            "categorie_id"=>1 ,
        ],


            ['img'=>"gallery/trunk.png",
            "description"=> "Trunk" ,
            "categorie_id"=>2 ,
        ],

            ['img'=>"gallery/vegeta.png",
            "description"=> "Vegeta",
            "categorie_id"=>2 ,
        ],

            ['img'=>"gallery/bra.png",
            "description"=> "Bra" ,
            "categorie_id"=>2 ,
        ],
        ]) ;
    }
}
