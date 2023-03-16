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
        Schema::create('nta_levels', function (Blueprint $table) {
            $table->id();
            $table->string('nta_level_name', 255);
            $table->string('nta_level_description', 255)->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return voidhhh
     */
    public function down()
    {
        Schema::dropIfExists('nta_levels');
    }
};
