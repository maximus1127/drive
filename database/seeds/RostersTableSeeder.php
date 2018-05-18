<?php

use Illuminate\Database\Seeder;

class RostersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=1; $i<=30; $i++)
        {
          DB::table('rosters')->insert([

            'day_1' => $faker->date($format = 'Y-m-d'),
            'day_2' => $faker->date($format = 'Y-m-d'),
            'day_3' => $faker->date($format = 'Y-m-d'),
            'day_4' => $faker->date($format = 'Y-m-d'),
            'school_id' => $faker->numberBetween(1, 5),
            'course_id' => $faker->numberBetween(1, 40),
            'user_id' => $faker->numberBetween(1, 100),






          ]);
        }
    }
}
