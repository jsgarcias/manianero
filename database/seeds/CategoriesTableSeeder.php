<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'General'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Nacional'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Internacional'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Deportes'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Entretenimiento'
        ]);
        
        DB::table('categories')->insert([
            'name' => 'Salud'
        ]);
    }
}
