<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('courses', function(Blueprint $table)
		{
			$table->foreign('school_id', 'courses_ibfk_1')->references('id')->on('schools')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('instructor_day_1', 'courses_ibfk_2')->references('id')->on('instructors')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('instructor_day_2', 'courses_ibfk_3')->references('id')->on('instructors')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('instructor_day_3', 'courses_ibfk_4')->references('id')->on('instructors')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('instructor_day_4', 'courses_ibfk_5')->references('id')->on('instructors')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('courses', function(Blueprint $table)
		{
			$table->dropForeign('courses_ibfk_1');
			$table->dropForeign('courses_ibfk_2');
			$table->dropForeign('courses_ibfk_3');
			$table->dropForeign('courses_ibfk_4');
			$table->dropForeign('courses_ibfk_5');
		});
	}

}
