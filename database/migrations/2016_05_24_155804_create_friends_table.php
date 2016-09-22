<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
    {

        Schema::create('friends', function(Blueprint $table){
            $table->increments('id');
            $table->integer('patient_id');
            $table->integer('doctor_id');
            $table->boolean('accepted');
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
        Schema::drop('friends');
        
    }
}
