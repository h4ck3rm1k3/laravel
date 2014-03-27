<?php

use Illuminate\Database\Migrations\Migration;

class CreateTranscacheTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transcache', function($table) {
            $table->increments('id');
            $table->varbinary('tc_url', 255)->unique();
            $table->binary('tc_contents')->nullable();
            $table->binary('tc_time', 14);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transcache');
    }

}