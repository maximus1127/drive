<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('payments', function(Blueprint $table)
		{
			$table->foreign('school_id', 'payments_ibfk_1')->references('id')->on('schools')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('student_id', 'payments_ibfk_2')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('payments', function(Blueprint $table)
		{
			$table->dropForeign('payments_ibfk_1');
			$table->dropForeign('payments_ibfk_2');
		});
	}

}
