<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
            Schema::create('users', function (Blueprint $table){
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('username');
            $table->string('password');
            $table->string('phone_number');
            $table->string('address');
            $table->string('speciality_area');
            $table->string('hospital_name');
            $table->string('hospital_location');
            $table->boolean('is_patient')->default(false);
            $table->boolean('is_doctor')->default(false);
            $table->boolean('is_admin')->default(false);
            $table->string('remember_token');
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
        Schema::drop('users');
    }
}
