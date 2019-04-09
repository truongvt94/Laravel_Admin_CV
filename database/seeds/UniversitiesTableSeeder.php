<?php

use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('universities')->insert([
          [
          'name' => 'DHSPKT Hung yen',
          'slug' => 'DHSP-Hung-Yen',
          'is_feature' => '1'
          ],
          ]);
    }
}
