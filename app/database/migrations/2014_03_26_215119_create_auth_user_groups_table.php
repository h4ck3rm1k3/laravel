<?php

use Illuminate\Database\Migrations\Migration;

class CreateAuthusergroupsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_user_groups', function($table) {
            $table->increments('id');
            $table->integer('user_id')->index();
            $table->integer('group_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auth_user_groups');
    }

}