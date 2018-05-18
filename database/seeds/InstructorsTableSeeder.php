<?php

use Illuminate\Database\Seeder;

class InstructorsTableSeeder extends Seeder
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
          DB::table('instructors')->insert([
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'state_license' => $faker->randomNumber($nbDigits = 6, $strict = true),
            'state_license_exp' => $faker->dateTimeThisYear($max = '+7 months'),
            'address_1' => $faker->streetAddress,
            'hire_date' => $faker->date,
            'city' => $faker->city,
            'state' => 'Louisiana',
            'zip_code' => $faker->postcode,
            'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'phone' => $faker->phoneNumber,


            'drivers_license' => $faker->randomNumber($nbDigits = 5, $strict = true),

            'school_id' => $faker->numberBetween(1, 5),
            'role' => $faker->randomElement($array = array('student', 'employee', 'school_admin', 'auditor', 'auditor_admin', 'super_admin')),





          ]);
        }
    }
}
