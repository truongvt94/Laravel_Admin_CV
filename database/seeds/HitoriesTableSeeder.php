<?php

use Illuminate\Database\Seeder;

class HitoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hitories')->insert([
            [
            'name' => 'univer of techonogy',
            'type' => 'univer',
            ],
        ]);
    }
}
