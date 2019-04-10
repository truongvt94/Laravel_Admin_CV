<?php

use Illuminate\Database\Seeder;

class WorkExperincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_experiences')->insert([
           [
           'cv_id' => '1',
           'company_id' => '1',
           'year_start' => '2016',
           'year_end' => '2017',
           'developer' => 'developer',
           'description' => 'description',
           ],
           ]);
    }
}