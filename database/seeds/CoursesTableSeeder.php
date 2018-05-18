<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=1; $i<=40; $i++)
        {
          DB::table('courses')->insert([

            'day_1' => $faker->date($format = 'Y-m-d'),
            'day_2' => $faker->date($format = 'Y-m-d'),
            'day_3' => $faker->date($format = 'Y-m-d'),
            'day_4' => $faker->date($format = 'Y-m-d'),
            'instructor_day_1' => $faker->numberBetween(1, 30),
            'instructor_day_2' => $faker->numberBetween(1, 30),
            'instructor_day_3' => $faker->numberBetween(1, 30),
            'instructor_day_4' => $faker->numberBetween(1, 30),
            'school_id' => $faker->numberBetween(1, 5),
            'class_code' => $faker->randomElement($array = array('38 hr', '14 hr', 'Defensive Driving', 'Driver Improvement', 'Alcohol Education')),
            'status' => $faker->randomElement($array = array('Open', 'Closed')),








          ]);
        }
    }
}
