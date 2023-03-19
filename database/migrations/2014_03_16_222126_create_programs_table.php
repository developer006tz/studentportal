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
            $table->unsignedBigInteger('nta_level_id')->index();
            $table->foreign('nta_level_id','nta_level_fk')->references('id')->on('nta_levels');
            $table->unsignedBigInteger('dept_id')->index();
            $table->foreign('dept_id','dept_id_fk')->references('dept_id')->on('departments');
            $table->timestamps();
        });

        DB::table('programs')->insert([
            ['program_code' => 'BAE', 'program_name' => 'BACHELOR DEGREE IN AUTOMOBILE ENGINEERING', 'capacity' => 300, 'nta_level_id' => 5, 'dept_id' => 3],
            ['program_code' => 'BAME', 'program_name' => 'BACHELOR DEGREE IN AIRCRAFT MAINTANANCE ENGINEERING', 'capacity' => 50, 'nta_level_id' => 5, 'dept_id' => 5],
            ['program_code' => 'BATF', 'program_name' => 'BACHELOR DEGREE IN ACCOUNTING AND TRANSPORT FINANCE', 'capacity' => 1000, 'nta_level_id' => 5, 'dept_id' => 2],
            ['program_code' => 'BBA', 'program_name' => 'BACHELOR DEGREE IN BUSINESS ADMINISTRATION', 'capacity' => 1000, 'nta_level_id' => 5, 'dept_id' => 2],
            ['program_code' => 'BCAE', 'program_name' => 'BASIC TECHNICIAN CERTIFICATE IN AUTOMOBILE ENGINEERING', 'capacity' => 200, 'nta_level_id' => 1, 'dept_id' => 3],
            ['program_code' => 'BCAME', 'program_name' => 'BASIC TECHNICIAN CERTIFICATE IN AIRCRAFT MAINTANANCE ENGINEERING', 'capacity' => 50, 'nta_level_id' => 1, 'dept_id' => 5],
            ['program_code' => 'BCATF', 'program_name' => 'BASIC TECHNICIAN CERTIFICATE IN ACCOUNTING AND TRANSPORT FINANCE', 'capacity' => 1000, 'nta_level_id' => 1, 'dept_id' => 2],
            ['program_code' => 'BCBA', 'program_name' => 'BASIC TECHNICIAN CERTIFICATE IN BUSINESS ADMINISTRATION', 'capacity' => 1000, 'nta_level_id' => 1, 'dept_id' => 2],
            ['program_code' => 'BCFCF', 'program_name' => 'BASIC TECHNICIAN CERTIFICATE IN FREIGHT CLEARING AND FORWADING', 'capacity' => 1000, 'nta_level_id' => 1, 'dept_id' => 6],
            ['program_code' => 'BCHRM', 'program_name' => 'BASIC TECHNICIAN CERTIFICATE IN HUMAN RESOURCES MANAGEMENT', 'capacity' => 1000, 'nta_level_id' => 1, 'dept_id' => 2],
            ['program_code' => 'BCICT', 'program_name' => 'BASIC TECHNICIAN CERTIFICATE IN COMPUTING AND INFORMATION COMMUNICATION TECHNOLOGY', 'capacity' => 200, 'nta_level_id' => 1, 'dept_id' => 1],
            ['program_code' => 'BCLTM', 'program_name' => 'BASIC TECHNICIAN CERTIFICATE IN LOGISTICS AND TRANSPORT MANAGEMENT', 'capacity' => 1000, 'nta_level_id' => 1, 'dept_id' => 7],
            ['program_code' => 'BCME', 'program_name' => 'BASIC TECHNICIAN CERTIFICATE IN MECHANICAL ENGINEERING', 'capacity' => 200, 'nta_level_id' => 1, 'dept_id' => 9],
            ['program_code' => 'DMPR', 'program_name' => 'ORDINARY DIPLOMA IN MARKETING AND PUBLIC RELATION', 'capacity' => 1000, 'nta_level_id' => 3, 'dept_id' => 4],
            ['program_code' => 'DPLM', 'program_name' => 'ORDINARY DIPLOMA IN PROCUREMENT AND LOGISTICS MANAGEMENT', 'capacity' => 1000, 'nta_level_id' => 3, 'dept_id' => 2],
            ['program_code' => 'HDAE-1', 'program_name' => 'HIGHER DIPLOMA ONE IN AUTOMOBILE ENGINEERING', 'capacity' => 300, 'nta_level_id' => 4, 'dept_id' => 3],
            ['program_code' => 'HDAE-2', 'program_name' => 'HIGHER DIPLOMA TWO IN AUTOMOBILE ENGINEERING', 'capacity' => 300, 'nta_level_id' => 4, 'dept_id' => 3],
            ['program_code' => 'HDAE-3', 'program_name' => 'HIGHER DIPLOMA THREE IN AUTOMOBILE ENGINEERING', 'capacity' => 300, 'nta_level_id' => 4, 'dept_id' => 3],
            ['program_code' => 'HDAME-1', 'program_name' => 'HIGHER DIPLOMA ONE IN AIRCRAFT MAINTANANCE ENGINEERING', 'capacity' => 50, 'nta_level_id' => 4, 'dept_id' => 5],
            ['program_code' => 'HDAME-2', 'program_name' => 'HIGHER DIPLOMA TWO IN AIRCRAFT MAINTANANCE ENGINEERING', 'capacity' => 50, 'nta_level_id' => 4, 'dept_id' => 5],
            ['program_code' => 'HDAME-3', 'program_name' => 'HIGHER DIPLOMA THREE IN AIRCRAFT MAINTANANCE ENGINEERING', 'capacity' => 50, 'nta_level_id' => 4, 'dept_id' => 5],
            ['program_code' => 'HDATF-1', 'program_name' => 'HIGHER DIPLOMA ONE IN ACCOUNTING AND TRANSPORT FINANCE', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 2],
            ['program_code' => 'HDATF-2', 'program_name' => 'HIGHER DIPLOMA TWO IN ACCOUNTING AND TRANSPORT FINANCE', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 2],
            ['program_code' => 'HDBA-1', 'program_name' => 'HIGHER DIPLOMA ONE IN BUSINESS ADMINISTRATION', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 2],
            ['program_code' => 'HDBA-2', 'program_name' => 'HIGHER DIPLOMA TWO IN BUSINESS ADMINISTRATION', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 2],
            ['program_code' => 'HDCS-1', 'program_name' => 'HIGHER DIPLOMA ONE IN COMPUTER SCIENCE', 'capacity' => 400, 'nta_level_id' => 4, 'dept_id' => 1],
            ['program_code' => 'HDCS-2', 'program_name' => 'HIGHER DIPLOMA TWO IN COMPUTER SCIENCE', 'capacity' => 400, 'nta_level_id' => 4, 'dept_id' => 1],
            ['program_code' => 'HDEMIT-1', 'program_name' => 'HIGHER DIPLOMA ONE OF EDUCATION IN MATHEMATICS AND INFORMATION TECHNOLOGY', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 1],
            ['program_code' => 'HDEMIT-2', 'program_name' => 'HIGHER DIPLOMA TWO OF EDUCATION IN MATHEMATICS AND INFORMATION TECHNOLOGY', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 1],
            ['program_code' => 'HDHRM-1', 'program_name' => 'HIGHER DIPLOMA ONE IN HUMAN RESOURCES MANAGEMENT', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 2],
            ['program_code' => 'HDHRM-2', 'program_name' => 'HIGHER DIPLOMA TWO IN HUMAN RESOURCES MANAGEMENT', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 2],
            ['program_code' => 'HDIT-1', 'program_name' => 'HIGHER DIPLOMA ONE IN INFORMATION TECHNOLOGY', 'capacity' => 400, 'nta_level_id' => 4, 'dept_id' => 1],
            ['program_code' => 'HDIT-2', 'program_name' => 'HIGHER DIPLOMA TWO IN INFORMATION TECHNOLOGY', 'capacity' => 400, 'nta_level_id' => 4, 'dept_id' => 1],
            ['program_code' => 'HDLTM-1', 'program_name' => 'HIGHER DIPLOMA ONE IN LOGISTICS AND TRANSPORT MANAGEMENT', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 7],
            ['program_code' => 'HDLTM-2', 'program_name' => 'HIGHER DIPLOMA TWO IN LOGISTICS AND TRANSPORT MANAGEMENT', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 7],
            ['program_code' => 'HDME-1', 'program_name' => 'HIGHER DIPLOMA ONE IN MECHANICAL ENGINEERING', 'capacity' => 300, 'nta_level_id' => 4, 'dept_id' => 3],
            ['program_code' => 'HDME-2', 'program_name' => 'HIGHER DIPLOMA TWO IN MECHANICAL ENGINEERING', 'capacity' => 300, 'nta_level_id' => 4, 'dept_id' => 3],
            ['program_code' => 'HDME-3', 'program_name' => 'HIGHER DIPLOMA THREE IN MECHANICAL ENGINEERING', 'capacity' => 300, 'nta_level_id' => 4, 'dept_id' => 3],
            ['program_code' => 'HDMPR-1', 'program_name' => 'HIGHER DIPLOMA ONE IN MARKETING AND PUBLIC RELATION', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 2],
            ['program_code' => 'HDMPR-2', 'program_name' => 'HIGHER DIPLOMA TWO IN MARKETING AND PUBLIC RELATION', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 2],
            ['program_code' => 'HDPLM-1', 'program_name' => 'HIGHER DIPLOMA ONE IN PROCUREMENT AND LOGISTICS MANAGEMENT', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 7],
            ['program_code' => 'HDPLM-2', 'program_name' => 'HIGHER DIPLOMA TWO IN PROCUREMENT AND LOGISTICS MANAGEMENT', 'capacity' => 1000, 'nta_level_id' => 4, 'dept_id' => 7]
            
        ]);
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




