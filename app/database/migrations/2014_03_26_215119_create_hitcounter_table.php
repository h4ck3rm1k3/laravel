<?php

use Illuminate\Database\Migrations\Migration;

class CreateHitcounterTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hitcounter', function($table) {
            $table->increments('id');
            $table->integer('hc_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('hitcounter');
    }

}