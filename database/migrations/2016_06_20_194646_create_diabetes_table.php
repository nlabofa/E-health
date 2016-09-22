<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiabetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('diabetes', function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('age');
            $table->string('urinate');
            $table->string('thirsty');
            $table->string('hungry');
            $table->string('weight');
            $table->string('injury');
            $table->string('irritated');
            $table->string('tired');
            $table->string('blurred');
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
        //
        Schema::drop('diabetes');
    }
}


