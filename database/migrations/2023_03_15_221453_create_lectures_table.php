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
        Schema::create('lectures', function (Blueprint $table) {
            $table->id('lecture_id');
            $table->unsignedBigInteger('dept_id')->index();
            $table->foreign('dept_id','dept_id__fk')->references('dept_id')->on('departments');
            $table->unsignedBigInteger('prog_id')->index();
            $table->foreign('prog_id','prog_id__fk')->references('prog_id')->on('programs');
            $table->string('full_name', 100);
            $table->string('email', 100)->nullable()->unique();
            $table->string('phone', 100)->nullable();
            $table->string('password', 255);
            $table->string('default_password', 255);
            $table->enum('status', ['0', '1'])->default('1');
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
        Schema::dropIfExists('lectures');
    }
};
