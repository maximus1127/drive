<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRostersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('rosters', function(Blueprint $table)
		{
			$table->foreign('course_id', 'rosters_ibfk_1')->references('id')->on('courses')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('school_id', 'rosters_ibfk_2')->references('id')->on('schools')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'rosters_ibfk_3')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('rosters', function(Blueprint $table)
		{
			$table->dropForeign('rosters_ibfk_1');
			$table->dropForeign('rosters_ibfk_2');
			$table->dropForeign('rosters_ibfk_3');
		});
	}

}
