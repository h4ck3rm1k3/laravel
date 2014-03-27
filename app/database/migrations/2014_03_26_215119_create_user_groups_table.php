<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsergroupsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_groups', function($table) {
            $table->increments('id');
            $table->integer('ug_user')->unsigned()->index();
            $table->varbinary('ug_group', 255)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_groups');
    }

}