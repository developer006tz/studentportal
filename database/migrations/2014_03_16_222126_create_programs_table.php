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
        Schema::create('programs', function (Blueprint $table) {
            $table->id('program_id');
            $table->string('program_code', 100);
            $table->string('program_name', 255);
            $table->integer('capacity');
            $table->unsignedBigInteger('nta_level')->index();
            $table->foreign('nta_level','nta_level_fk')->references('id')->on('nta_levels');
            $table->unsignedBigInteger('dept_id')->index();
            $table->foreign('dept_id','dept_id_fk')->references('dept_id')->on('departments');
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
        Schema::dropIfExists('programs');
    }
};
