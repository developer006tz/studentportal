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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('course_id');
            $table->string('course_code', 100);
            $table->text('course_name');
            $table->integer('credit')->default('9');
            $table->enum('elective', ['0', '1'])->default('0');
            $table->unsignedBigInteger('dept_id')->index();
            $table->foreign('dept_id')->references('dept_id')->on('departments');
            $table->unsignedBigInteger('program_id')->index();
            $table->foreign('program_id')->references('program_id')->on('programs');
            $table->unsignedBigInteger('semester_id')->index();
            $table->foreign('semester_id')->references('semester_id')->on('semesters');
            $table->unsignedBigInteger('course_credit');
            $table->unsignedBigInteger('nta_level_id')->index();
            $table->foreign('nta_level_id')->references('id')->on('nta_levels');
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
        Schema::dropIfExists('courses');
    }
};
