<?php

use Illuminate\Database\Migrations\Migration;

class CreateAuthgrouppermissionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_group_permissions', function($table) {
            $table->increments('id');
            $table->integer('group_id')->index();
            $table->integer('permission_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auth_group_permissions');
    }

}