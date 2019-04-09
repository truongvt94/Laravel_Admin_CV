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
        $this->call(CvSkillTableSeeder::class);  
        $this->call(UniversitiesTableSeeder::class);
        $this->call(EducationTableSeeder::class);
        $this->call(CompaniesTableSeeder::class);
        $this->call(WorkExperincesTableSeeder::class);
        $this->call(PortfolioTableSeeder::class);
        $this->call(ReferencesTableSeeder::class);
    }
}
