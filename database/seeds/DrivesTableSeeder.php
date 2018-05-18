<?php

use Illuminate\Database\Seeder;

class DrivesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=1; $i<=100; $i++)
        {
          DB::table('drives')->insert([

            'car' => $faker->numberBetween(2, 30),
            'school_id' => $faker->numberBetween(1, 5),
            'student_id' => $faker->numberBetween(1, 100),
            'instructor_id' => $faker->numberBetween(1, 30),
            'start_mileage' => $faker->randomNumber,
            'end_mileage' => $faker->randomNumber,
            'date' => $faker->date($format = 'Y-m-d'),
            'start_time' => $faker->time($format = 'H:i'),
            'end_time' => $faker->time($format = 'H:i'),
            'start_location' => $faker->streetAddress,
            'end_location' => $faker->streetAddress,
            'drive_environment' => $faker->word,






          ]);
        }
    }
}
