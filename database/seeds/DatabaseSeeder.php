<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CvTableSeeder::class);
        $this->call(SkillTableSeeder::class);
        $this->call(HitoriesTableSeeder::class);
        $this->call(ReferencesTableSeeder::class);
        $this->call(PortfolioTableSeeder::class);
        $this->call(CvHitoriesTableSeeder::class);
        $this->call(CvSkillTableSeeder::class);  
    }
}
