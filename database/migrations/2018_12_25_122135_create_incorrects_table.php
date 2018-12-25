<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncorrectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incorrects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid', '255');
            $table->string('from', '255');
            $table->string('to', '255');
            $table->text('message');
            $table->text('manifest');
            $table->dateTime('datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incorrects');
    }
}
