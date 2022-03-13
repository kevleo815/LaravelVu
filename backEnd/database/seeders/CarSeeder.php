<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str;
class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'nameCar' => Str::random(20),
            'cost' => random_int(0,10000),
            'color' => Str::random(),
            
        ]);

        DB::table('cars')->insert([
            'nameCar' => Str::random(20),
            'cost' => random_int(0,10000),
            'color' => Str::random(),
         
        ]);

        DB::table('cars')->insert([
            'nameCar' => Str::random(20),
            'cost' => random_int(0,10000),
            'color' => Str::random(),
            
        ]);

        DB::table('cars')->insert([
            'nameCar' => Str::random(20),
            'cost' => random_int(0,10000),
            'color' => Str::random(),
           
        ]);

        DB::table('cars')->insert([
            'nameCar' => Str::random(20),
            'cost' => random_int(0,10000),
            'color' => Str::random(),
           
        ]);

        
    }
}
