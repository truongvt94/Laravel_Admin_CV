<?php

use Illuminate\Database\Seeder;

class CvHitoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cv_hitories')->insert([
            [
            'cvs_id' => '1',
            'hitories_id' => '1',
            'year_start' => '2016',
            'year_end' => '2017',
            'developer' => 'developer',
            'description' => 'description',
            ],
        ]);
    }
}
