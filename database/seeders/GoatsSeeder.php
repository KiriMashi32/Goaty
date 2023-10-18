<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Goat;

class GoatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g = new Goat();
        $g->sex = false;
        $g->name = "BastienL";
        $g->price = 8500;
        $g->color ="darkblue";
        $g->birthday = "2004-07-21";
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "BastienT";
        $g->price = 300;
        $g->color ="purple";
        $g->birthday = "1990-07-31";
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Alexandre";
        $g->price = 80000;
        $g->color ="red";
        $g->birthday = "2004-08-23";
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Léo";
        $g->price = 850056;
        $g->color ="green";
        $g->birthday = "2003-10-11";
        $g->save();

        $g = new Goat();
        $g->sex = true;
        $g->name = "Miruna";
        $g->price = 90000000;
        $g->color ="green";
        $g->birthday = "2003-04-03";
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Erwann";
        $g->price = 12;
        $g->color ="orange";
        $g->birthday = "2003-03-21";
        $g->save();
        

        $g = new Goat();
        $g->sex = false;
        $g->name = "Alhousseyni";
        $g->price = 1000000;
        $g->color ="blue";
        $g->birthday = "2003-10-12";
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Adam";
        $g->price = 900;
        $g->color ="green";
        $g->birthday = "2004-10-04";
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Huge";
        $g->price = 777;
        $g->color ="black";
        $g->birthday = "2002-03-18";
        $g->save();

        $g = new Goat();
        $g->sex = false;
        $g->name = "Guillaume";
        $g->price = 1;
        $g->color ="blue";
        $g->birthday = "2004-04-09";
        $g->save();
    }
}
