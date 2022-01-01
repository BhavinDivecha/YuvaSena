<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('school_name')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('vidhansabha_id')->nullable();
            $table->integer('taluka_id')->nullable();
            $table->string('phone_no');
            $table->string('email');
            $table->text('address')->nullable();
            $table->string('pincode')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('hall_ticket_number')->nullable();
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
        Schema::dropIfExists('students');
    }
}
