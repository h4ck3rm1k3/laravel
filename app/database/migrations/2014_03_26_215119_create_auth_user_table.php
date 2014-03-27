<?php

use Illuminate\Database\Migrations\Migration;

class CreateAuthuserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_user', function($table) {
            $table->increments('id');
            $table->string('password', 128);
            $table->dateTime('last_login');
            $table->boolean('is_superuser');
            $table->string('username', 30)->unique();
            $table->string('first_name', 30);
            $table->string('last_name', 30);
            $table->string('email', 75);
            $table->boolean('is_staff');
            $table->boolean('is_active');
            $table->dateTime('date_joined');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auth_user');
    }

}