<?php

use Illuminate\Database\Migrations\Migration;

class CreateAuthpermissionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_permission', function($table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('content_type_id')->index();
            $table->string('codename', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auth_permission');
    }

}