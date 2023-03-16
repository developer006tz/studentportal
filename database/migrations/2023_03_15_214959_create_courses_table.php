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
            $table->integer('credit', 2)->default(9);
            $table->enum('elective', ['0', '1'])->default('0');
            $table->unsignedBigInteger('dept_id')->index();
            $table->foreign('dept_id')->references('dept_id')->on('departments');
            $table->unsignedBigInteger('prog_id')->index();
            $table->foreign('prog_id')->references('prog_id')->on('programs');
            $table->unsignedBigInteger('semester_id')->index();
            $table->foreign('semester_id')->references('id')->on('semesters');
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
