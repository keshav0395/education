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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('mobile', 20);
            $table->string('gender', 6);
            $table->string('dob', 13);
            $table->string('description', 1000);
            $table->string('location', 100);
            $table->string('higher_education', 500);
            $table->string('permanent_address', 500);
            $table->string('pincode', 10);
            $table->string('marital_status', 20);
            $table->string('password');
            $table->string('role', 10);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
