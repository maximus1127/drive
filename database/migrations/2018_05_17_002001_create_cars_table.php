<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('year');
			$table->string('make');
			$table->string('model');
			$table->string('vin');
			$table->string('plate');
			$table->integer('start_mileage');
			$table->integer('logged_miles')->nullable();
			$table->integer('school_id')->unsigned()->index('school_id');
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
		Schema::drop('cars');
	}

}
