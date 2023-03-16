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
        Schema::create('complaints', function (Blueprint $table) {
            $table->id('complaint_id');
            $table->string('student_id');
            $table->unsignedBigInteger('program_id')->index();
            $table->foreign('program_id')->references('program_id')->on('programs');
            $table->unsignedBigInteger('dept_id')->index();
            $table->foreign('dept_id')->references('dept_id')->on('departments');
            $table->unsignedBigInteger('lecture_id')->index();
            $table->foreign('lecture_id')->references('lecture_id')->on('lectures');
            $table->unsignedBigInteger('complain_type_id')->index();
            $table->foreign('complain_type_id')->references('complain_type_id')->on('complain_types');
            $table->text('description');
            $table->text('solution');
            $table->enum('status', ['0', '1', '2', '3']);
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
        Schema::dropIfExists('complains');
    }
};
