<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTeacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_teacher', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_teacher');
            $table->enum('gender',['L','P']);    
            $table->unsignedBigInteger('id_lesson');
            $table->foreign('id_lesson')->references('id')->on('tb_lesson')->onDelete('cascade');
            $table->unsignedBigInteger('id_position');
            $table->foreign('id_position')->references('id')->on('tb_position')->onDelete('cascade');
            $table->string('teaching_place');
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
        Schema::dropIfExists('tb_teacher');
    }
}
