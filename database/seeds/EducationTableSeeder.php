<?php

use Illuminate\Database\Seeder;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('education')->insert([
            [
            'cv_id' => '1',
            'university_id' => '1',
            'year_start' => '2016',
            'year_end' => '2017',
            'developer' => 'developer',
            'description' => 'description',
            ],
            ]);
    }
}