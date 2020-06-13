<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
            ['name' =>'Untitled',"user_id"=>1],
            ['name' =>'StayHome',"user_id"=>1],
           
        ]);
    }
}
