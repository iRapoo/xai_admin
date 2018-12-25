<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachLessonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teach_lesson', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group', '255');
            $table->text('text');
            $table->string('teacher', '255');
            $table->integer('num');
            $table->integer('day');
            $table->integer('week');
            $table->integer('editor');
            $table->integer('active');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teach_lesson');
    }
}
