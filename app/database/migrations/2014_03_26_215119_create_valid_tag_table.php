<?php

use Illuminate\Database\Migrations\Migration;

class CreateValidtagTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('valid_tag', function($table) {
            $table->increments('id');
            $table->varbinary('vt_tag', 255)->primary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('valid_tag');
    }

}