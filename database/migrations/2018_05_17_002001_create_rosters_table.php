<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRostersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rosters', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('day_1');
			$table->date('day_2');
			$table->date('day_3');
			$table->date('day_4');
			$table->integer('school_id')->unsigned()->index('school_id');
			$table->integer('course_id')->unsigned()->index('class_id');
			$table->integer('user_id')->unsigned()->index('student_id');
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
		Schema::drop('rosters');
	}

}
