<?php

use Illuminate\Database\Migrations\Migration;

class CreateImagelinksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagelinks', function($table) {
            $table->increments('id');
            $table->integer('il_from')->unsigned()->index();
            $table->varbinary('il_to', 255)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('imagelinks');
    }

}