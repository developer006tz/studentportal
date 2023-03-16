<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_types', function (Blueprint $table) {
            $table->id();
            $table->string('user_type_name');
            $table->string('user_type_description')->nullable();
            $table->timestamps();
        });

        DB::table('user_types')->insert([
            ['user_type_name' => 'student'],
            ['user_type_name' => 'lecture'],
            ['user_type_name' => 'staff'],
            ['user_type_name' => 'department master'],
            ['user_type_name' => 'administrator'],
        ]);
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_types');
    }
}
