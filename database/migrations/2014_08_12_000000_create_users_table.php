<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_id');
            $table->string('email')->unique();
            $table->date('jod')->nullable();
            $table->string('phone')->nullable()->unique();
            $table->enum('status', ['0', '1'])->default('1');
            $table->string('avatar')->nullable();
            $table->unsignedBigInteger('user_type')->nullable()->index();
            $table->foreign('user_type')->references('id')->on('user_types');
            $table->unsignedBigInteger('department')->nullable()->index();
            $table->foreign('department')->references('dept_id')->on('departments');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
