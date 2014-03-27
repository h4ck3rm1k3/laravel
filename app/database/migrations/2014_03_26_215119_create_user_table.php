<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function($table) {
            $table->increments('user_id');
            $table->varbinary('user_name', 255)->unique();
            $table->varbinary('user_real_name', 255);
            $table->tinyblob('user_password');
            $table->tinyblob('user_newpassword');
            $table->binary('user_newpass_time', 14)->nullable();
            $table->tinyblob('user_email')->index();
            $table->binary('user_touched', 14)->default("              ");
            $table->binary('user_token', 32)->default("                                ");
            $table->binary('user_email_authenticated', 14)->nullable();
            $table->binary('user_email_token', 32)->nullable()->index();
            $table->binary('user_email_token_expires', 14)->nullable();
            $table->binary('user_registration', 14)->nullable();
            $table->integer('user_editcount')->nullable();
            $table->varbinary('user_password_expires', 14)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user');
    }

}