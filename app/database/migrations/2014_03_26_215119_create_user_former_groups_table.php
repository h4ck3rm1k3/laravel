<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserformergroupsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_former_groups', function($table) {
            $table->increments('id');
            $table->integer('ufg_user')->unsigned()->index();
            $table->varbinary('ufg_group', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_former_groups');
    }

}