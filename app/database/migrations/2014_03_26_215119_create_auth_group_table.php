<?php

use Illuminate\Database\Migrations\Migration;

class CreateAuthgroupTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auth_group', function($table) {
            $table->increments('id');
            $table->string('name', 80)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('auth_group');
    }

}