<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grades', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('student_id')->unsigned()->index('student_id');
			$table->integer('chapter_1');
			$table->integer('chapter_2');
			$table->integer('chapter_3');
			$table->integer('chapter_4');
			$table->integer('chapter_5');
			$table->integer('chapter_6');
			$table->integer('chapter_7');
			$table->integer('chapter_8');
			$table->integer('chapter_9');
			$table->integer('state_test');
			$table->integer('day_4_assessment');
			$table->integer('road_skills');
			$table->integer('rst_instructor_id')->unsigned()->index('rst_instructor_id');
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
		Schema::drop('grades');
	}

}
