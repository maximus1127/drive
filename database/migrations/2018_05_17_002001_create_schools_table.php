<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSchoolsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schools', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('address_1');
			$table->string('city');
			$table->string('state');
			$table->string('zip_code');
			$table->string('phone');
			$table->string('school_id');
			$table->string('bond_name');
			$table->string('bond_amount');
			$table->string('bond_number');
			$table->string('verification_bond_received')->nullable();
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
		Schema::drop('schools');
	}

}
