<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserpropertiesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_properties', function($table) {
            $table->increments('id');
            $table->integer('up_user')->index();
            $table->varbinary('up_property', 255)->index();
            $table->binary('up_value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('user_properties');
    }

}