<?php

use Illuminate\Database\Migrations\Migration;

class CreateIwlinksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iwlinks', function($table) {
            $table->increments('id');
            $table->integer('iwl_from')->unsigned()->index();
            $table->varbinary('iwl_prefix', 20)->index();
            $table->varbinary('iwl_title', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('iwlinks');
    }

}