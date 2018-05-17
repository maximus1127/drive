<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInstructorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('instructors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('drivers_license');
			$table->string('state_license');
			$table->date('state_license_exp');
			$table->string('phone');
			$table->date('hire_date');
			$table->date('termination_date')->nullable();
			$table->text('termination_reason', 65535)->nullable();
			$table->date('dob');
			$table->string('address_1');
			$table->string('city');
			$table->string('state');
			$table->string('zip_code');
			$table->integer('school_id')->unsigned()->index('school_id');
			$table->text('notes', 65535);
			$table->string('role');
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
		Schema::drop('instructors');
	}

}
