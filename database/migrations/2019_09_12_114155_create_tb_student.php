<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbStudent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_student', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_student');
            $table->integer('age_student');
            $table->unsignedBigInteger('id_position');
            $table->foreign('id_position')->references('id')->on('tb_position')->onDelete('cascade');
            $table->enum('gender',['L','P']);
            $table->string('school_level');
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
        Schema::dropIfExists('tb_student');
    }
}
