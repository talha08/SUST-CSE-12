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
            $table->string('8_am');
            $table->string('9_am');
            $table->string('10_am');
            $table->string('11_am');
            $table->string('12_pm');
            $table->string('1_pm');
            $table->string('2_pm');
            $table->string('3_pm');
            $table->string('4_pm');
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
