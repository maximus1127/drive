<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrivesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drives', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('car')->unsigned()->index('car');
			$table->integer('school_id')->unsigned()->index('school_id');
			$table->integer('student_id')->unsigned()->index('student_id');
			$table->integer('start_mileage')->nullable();
			$table->integer('end_mileage')->nullable();
			$table->integer('instructor_id')->unsigned()->index('instructor_id');
			$table->date('date');
			$table->time('start_time');
			$table->time('end_time');
			$table->string('start_location');
			$table->string('end_location');
			$table->string('drive_environment')->nullable();
			$table->text('notes', 65535)->nullable();
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
		Schema::drop('drives');
	}

}
