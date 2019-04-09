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
        DB::table('cv_skill')->insert([
            [
            'cv_id' => '1',
            'skill_id' => '1',
            'percent' => '50',
            ],
        ]);
    }
}
