<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('day_1');
			$table->date('day_2')->nullable();
			$table->date('day_3')->nullable();
			$table->date('day_4')->nullable();
			$table->integer('instructor_day_1')->unsigned()->index('instructor_day_1');
			$table->integer('instructor_day_2')->unsigned()->nullable()->index('instructor_day_2');
			$table->integer('instructor_day_3')->unsigned()->nullable()->index('instructor_day_3');
			$table->integer('instructor_day_4')->unsigned()->nullable()->index('instructor_day_4');
			$table->integer('school_id')->unsigned()->index('school_id');
			$table->string('class_code', 20);
			$table->string('status', 10);
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
		Schema::drop('courses');
	}

}
