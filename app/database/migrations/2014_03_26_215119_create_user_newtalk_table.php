<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsernewtalkTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_newtalk', function($table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->varbinary('user_ip', 40)->index();
            $table->varbinary('user_last_timestamp', 14)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_newtalk');
    }

}