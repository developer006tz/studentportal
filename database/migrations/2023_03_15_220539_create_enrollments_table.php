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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id')->index();
            $table->foreign('student_id','student_id_fk')->references('student_id')->on('students');
            $table->unsignedBigInteger('course_id')->index();
            $table->foreign('course_id','course_id_fk')->references('course_id')->on('courses');
            $table->unsignedBigInteger('semester')->index();
            $table->foreign('semester','semester_fk')->references('semester_id')->on('semesters');
            $table->unsignedBigInteger('academic_year')->index();
            $table->foreign('academic_year','academic_year_fk')->references('academic_year_id')->on('academic_years');
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
        Schema::dropIfExists('enrollments');
    }
};
