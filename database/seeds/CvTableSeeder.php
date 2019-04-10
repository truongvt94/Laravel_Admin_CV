<?php

use Illuminate\Database\Seeder;

class CvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('cvs')->insert([
            [
            'name' => 'Truong Van Truong',
            'email' => 'anhtruongtk11'.'@gmail.com',
            'phone' => '01694695056',
            'slug' => 'truong-van-truong',
            'date' => '1994/05/22',
            'facebook' => 'truonggg.fb',
            'skype' => 'truonggg.skype',
            'chartwork' => 'truong.chartwork',
            'address' => 'Hung Yen',
            'sumary' => 'description',
            'images' => 'images',
            'avatar' => 'avatar',
            'developer' => 'enjinia-php',
            'professional_skill_des' => 'professional_skill_description',
            'personal_skill_des' => 'personal_skill_description',
            'work_experience_des' => 'work_experience_description',
            'education_des' => 'education_des',
            'user_id' => '1',
            ],
            ]);
    }
}
