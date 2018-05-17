<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGradesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('grades', function(Blueprint $table)
		{
			$table->foreign('rst_instructor_id', 'grades_ibfk_1')->references('id')->on('instructors')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('student_id', 'grades_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('grades', function(Blueprint $table)
		{
			$table->dropForeign('grades_ibfk_1');
			$table->dropForeign('grades_ibfk_2');
		});
	}

}
