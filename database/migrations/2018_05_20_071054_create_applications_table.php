<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->date('dob');
            $table->string('ssn');
            $table->string('sex');
            $table->string('race');
            $table->string('height');
            $table->string('weight');
            $table->string('hair');
            $table->string('eyes');
            $table->string('position');
            $table->string('drivers_license');
            $table->string('drivers_license_state');
            $table->integer('school_id')->unsigned();
            $table->string('status');
            $table->boolean('approved')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->foreign('school_id')->references('id')->on('schools');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applications');
    }
}
