<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDrivesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('drives', function(Blueprint $table)
		{
			$table->foreign('instructor_id', 'drives_ibfk_1')->references('id')->on('instructors')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('school_id', 'drives_ibfk_2')->references('id')->on('schools')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('student_id', 'drives_ibfk_3')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('car', 'drives_ibfk_4')->references('id')->on('cars')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('drives', function(Blueprint $table)
		{
			$table->dropForeign('drives_ibfk_1');
			$table->dropForeign('drives_ibfk_2');
			$table->dropForeign('drives_ibfk_3');
			$table->dropForeign('drives_ibfk_4');
		});
	}

}
