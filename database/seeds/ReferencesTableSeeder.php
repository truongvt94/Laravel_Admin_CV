<?php

use Illuminate\Database\Seeder;

class ReferencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('references')->insert([
            [
            'avatar' => 'img.jpg',
            'content' => 'Description',
            'cv_id' => '1',
            ],
            ]);
    }
}
