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

        DB::table('nta_levels')->insert([
            ['nta_level_name' => 'NTA LEVEL 4', 'nta_level_description' => 'basic certificate programs'],
            ['nta_level_name' => 'NTA LEVEL 5', 'nta_level_description' => 'certificate programs'],
            ['nta_level_name' => 'NTA LEVEL 6', 'nta_level_description' => 'diploma programs'],
            ['nta_level_name' => 'NTA LEVEL 7', 'nta_level_description' => 'advanced diploma programs'],
            ['nta_level_name' => 'NTA LEVEL 8', 'nta_level_description' => 'degree programs'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nta_levels');
    }
};
