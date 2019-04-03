<?php

use Illuminate\Database\Seeder;

class CvSkillTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cv_skills')->insert([
            [
            'cvs_id' => '1',
            'skills_id' => '1',
            'percent' => '50',
            ],
        ]);
    }
}
