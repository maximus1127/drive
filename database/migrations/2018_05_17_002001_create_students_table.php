<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('students', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('middle_name')->nullable();
			$table->string('parent_first_name');
			$table->string('parent_last_name');
			$table->string('address_1');
			$table->string('city');
			$table->string('state');
			$table->string('zip_code');
			$table->string('dob');
			$table->string('phone_1');
			$table->string('phone_2')->nullable();
			$table->string('email_1');
			$table->string('email_2')->nullable();
			$table->string('student_id');
			$table->string('school_id');
			$table->string('id_verified')->nullable();
			$table->text('notes', 65535);
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('students');
	}

}
