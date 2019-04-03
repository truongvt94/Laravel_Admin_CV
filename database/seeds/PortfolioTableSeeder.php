<?php

use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolio')->insert([
            [
            'name' => 'Project 1',
            'slug' => 'project-1',
            'date_start' => '2016/05/05',
            'date_end' => '2017/05/05',
            'is_featured' => '1',
            'cvs_id' => '1',
            ],
        ]);
    }
}
