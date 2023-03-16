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
        Schema::create('departments', function (Blueprint $table) {
            $table->id('dept_id');
            $table->string('dept_code',100);
            $table->text('dept_name');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

        });
        DB::table('departments')->insert([
            ['dept_code' => 'CCT','dept_name'=>'COMPUTING AND COMMUNICATION TECHNOLOGY'],
            ['dept_code' => 'BES','dept_name'=>'BUSINESS AND ENTREPRENURSHIP SCIENCES'],
            ['dept_code' => 'TET','dept_name'=>'TRANSPORT ENGINEERING TECHNOLOGY'],
            ['dept_code' => 'CPD','dept_name'=>'CENTER FOR PROFESSIONAL DEVELOPMENT'],
            ['dept_code' => 'AVI','dept_name'=>'AVIATION TECHNOLOGY'],
            ['dept_code' => 'TSES','dept_name'=>'TRANSPORT SAFETY AND ENVIRONMENTAL STUDIES'],
            ['dept_code' => 'LTS','dept_name'=>'LOGISTICS AND TRANSPORT STUDIES'],
            ['dept_code' => 'PGD','dept_name'=>'POSTIGRADUATE STUDIES'],
            ['dept_code' => 'MHSS','dept_name'=>'MATHEMATICS, HUMANITIES AND SOCIAL STUDIES'],
        ]);

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
};
