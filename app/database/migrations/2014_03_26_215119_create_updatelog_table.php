<?php

use Illuminate\Database\Migrations\Migration;

class CreateUpdatelogTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('updatelog', function($table) {
            $table->increments('id');
            $table->varbinary('ul_key', 255)->primary();
            $table->binary('ul_value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('updatelog');
    }

}