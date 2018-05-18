<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
          DB::table('users')->insert([
            'name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->email,
            'password' => bcrypt('password'),
            'middle_name'=>$faker->firstName,
            'parent_first_name'=>$faker->firstName,
            'parent_last_name' => $faker->lastName,
            'address_1' => $faker->streetAddress,
            'city' => $faker->city,
            'state' => 'Louisiana',
            'zip_code' => $faker->postcode,
            'dob' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'phone_1' => $faker->phoneNumber,
            'phone_2' => $faker->phoneNumber,
            'email_2' => $faker->email,
            'drivers_license' => $faker->randomNumber($nbDigits = 9),
            'id_verified' => 'yes',
            'school_id' => $faker->numberBetween(1, 5),
            'role' => $faker->randomElement($array = array('student', 'employee', 'school_admin', 'auditor', 'auditor_admin', 'super_admin')),
            'educational_school' => $faker->company,




          ]);
        }
    }
}
