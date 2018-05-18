<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CarsTableSeeder::class);
        $this->call(SchoolsTableSeeder::class);
        $this->call(RostersTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(DrivesTableSeeder::class);
        $this->call(InstructorsTableSeeder::class);
        $this->call(GradesTableSeeder::class);
    }
}
