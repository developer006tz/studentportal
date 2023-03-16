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
            $table->string('type_name');
            $table->string('type_description')->nullable();
            $table->timestamps();
        });

        DB::table('user_types')->insert([
            ['type_name' => 'student'],
            ['type_name' => 'lecture'],
            ['type_name' => 'staff'],
            ['type_name' => 'department master'],
            ['type_name' => 'administrator'],
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
