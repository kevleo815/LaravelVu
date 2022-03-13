<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Str;
class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->insert([
            'name' => Str::random(20),
            'lastname' => Str::random(20),
            'age' => random_int(18,60),
            
        ]);

        DB::table('people')->insert([
            'name' => Str::random(20),
            'lastname' => Str::random(20),
            'age' => random_int(18,60),
           
        ]);
        

        DB::table('people')->insert([
            'name' => Str::random(20),
            'lastname' => Str::random(20),
            'age' => random_int(18,60),
         
        ]);

        DB::table('people')->insert([
            'name' => Str::random(20),
            'lastname' => Str::random(20),
            'age' => random_int(18,60),
            
        ]);

        DB::table('people')->insert([
            'name' => Str::random(20),
            'lastname' => Str::random(20),
            'age' => random_int(18,60),
           
        ]);

        DB::table('people')->insert([
            'name' => Str::random(20),
            'lastname' => Str::random(20),
            'age' => random_int(18,60),
           
        ]);

        DB::table('people')->insert([
            'name' => Str::random(20),
            'lastname' => Str::random(20),
            'age' => random_int(18,60),
           
        ]);

        DB::table('people')->insert([
            'name' => Str::random(20),
            'lastname' => Str::random(20),
            'age' => random_int(18,60),
            
        ]);
    }
}
