<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('last_name')->nullable();
			$table->string('email')->unique();
			$table->string('password');
			$table->string('middle_name')->nullable();
			$table->string('parent_first_name')->nullable();
			$table->string('parent_last_name')->nullable();
			$table->string('address_1')->nullable();
			$table->string('city')->nullable();
			$table->string('state')->nullable();
			$table->string('zip_code')->nullable();
			$table->string('dob')->nullable();
			$table->string('phone_1')->nullable();
			$table->string('phone_2')->nullable();
			$table->string('email_2')->nullable();
			$table->string('drivers_license')->nullable();
			$table->string('id_verified')->nullable();
			$table->text('notes', 65535)->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->integer('school_id')->unsigned()->index('school_id');
			$table->string('role')->nullable();
			$table->string('educational_school', 50)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
