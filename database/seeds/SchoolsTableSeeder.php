<?php

use Illuminate\Database\Seeder;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for($i=1; $i<=5; $i++)
        {
          DB::table('schools')->insert([
            'name' => $faker->company,

            'address_1' => $faker->streetAddress,
            'city' => $faker->city,
            'state' => 'Louisiana',
            'zip_code' => $faker->postcode,
            'phone' => $faker->phoneNumber,
            'school_id' => $faker->randomNumber($nbDigits = 9),
            'bond_name' => $faker->firstName,
            'bond_amount' => '25000',
            'bond_number' => $faker->randomNumber,
            'verification_bond_received'=> 'yes',
            





          ]);
        }
    }
}
