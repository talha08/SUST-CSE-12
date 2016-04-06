<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routine', function (Blueprint $table) {
            $table->increments('id');
            $table->string('day');
            $table->string('am_8');
            $table->string('am_9');
            $table->string('am_10');
            $table->string('am_11');
            $table->string('pm_12');
            $table->string('pm_1');
            $table->string('pm_2');
            $table->string('pm_3');
            $table->string('pm_4');
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
        Schema::drop('routine');
    }
}
