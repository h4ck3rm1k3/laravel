<?php

use Illuminate\Database\Migrations\Migration;

class CreateExternallinksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('externallinks', function($table) {
            $table->increments('el_id');
            $table->integer('el_from')->unsigned()->index();
            $table->binary('el_to')->index();
            $table->binary('el_index')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('externallinks');
    }

}