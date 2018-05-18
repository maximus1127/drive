<?php

use Illuminate\Database\Seeder;

class GradesTableSeeder extends Seeder
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
        DB::table('grades')->insert([
        'student_id' => $faker->numberBetween(1, 100),
        'chapter_1' => $faker->numberBetween(1, 100),
        'chapter_2' => $faker->numberBetween(1, 100),
        'chapter_3' => $faker->numberBetween(1, 100),
        'chapter_4' => $faker->numberBetween(1, 100),
        'chapter_5' => $faker->numberBetween(1, 100),
        'chapter_6' => $faker->numberBetween(1, 100),
        'chapter_7' => $faker->numberBetween(1, 100),
        'chapter_8' => $faker->numberBetween(1, 100),
        'chapter_9' => $faker->numberBetween(1, 100),
        'state_test' => $faker->numberBetween(1, 100),
        'day_4_assessment' => $faker->numberBetween(1, 100),
        'road_skills' => $faker->numberBetween(1, 100),
        'rst_instructor_id' => $faker->numberBetween(1, 30),

      ]);
    }
    }
}
