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
            $table->string('school_name');
            $table->integer('district_id');
            $table->integer('vidhansabha_id');
            $table->integer('taluka_id');
            $table->string('phone_no');
            $table->string('email');
            $table->text('address');
            $table->string('pincode');
            $table->string('dob');
            $table->string('gender');
            $table->string('hall_ticket_number');
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
