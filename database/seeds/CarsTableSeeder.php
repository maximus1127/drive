<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
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
          DB::table('cars')->insert([

            'year' => $faker->year($max = 'now'),
            'school_id' => $faker->numberBetween(1, 5),
            'make' => $faker->word,
            'model' => $faker->word,
            'vin' => $faker->randomNumber($nbDigits = 6),
            'plate' => $faker->randomNumber($nbDigits = 7),
            'start_mileage' => $faker->randomNumber,






          ]);
        }
    }
}
