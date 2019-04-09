<?php

use Illuminate\Database\Seeder;

class SkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('skills')->insert([
            [
            'name' => 'html/css',
            'slug' => 'html-css',
            'type' => 'IT'
            ],
            ]);
    }
}
