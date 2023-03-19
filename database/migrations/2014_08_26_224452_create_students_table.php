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
            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('fullname');
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->unsignedBigInteger('nationality_id')->index();
            $table->foreign('nationality_id')->references('id')->on('countries');
            $table->string('maritual_status')->default('Single');
            $table->unsignedBigInteger(column:'program_id')->index();
            $table->foreign('program_id')->references('program_id')->on('programs');
            $table->string('admission_id')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->string('email')->nullable()->unique();
            $table->enum('status', ['0', '1'])->default('1');
            $table->string('photo')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
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
