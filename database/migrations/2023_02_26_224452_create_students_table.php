<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->string('fullname');
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('nationality')->default('Tanzanian');
            $table->string('maritual_status')->default('Single');
            $table->unsignedBigInteger('program_id')->index();
            $table->foreign('program_id')->references('program_id')->on('programs');
            $table->string('year_of_study')->index();
            $table->string('admission_id')->nullable();
            $table->string('phone_number')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->string('password');
            $table->string('default_password');
            $table->enum('status', ['0', '1'])->default('1');
            $table->string('photo')->nullable();
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
};
