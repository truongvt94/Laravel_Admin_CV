<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('companies')->insert([
    		[
    		'name' => 'Ha po soft',
    		'slug' => 'Ha-Po-soft',
    		'is_feature' => '1'
    		],
    	]);
    }
}
