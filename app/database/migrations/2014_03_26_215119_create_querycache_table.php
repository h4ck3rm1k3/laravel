<?php

use Illuminate\Database\Migrations\Migration;

class CreateQuerycacheTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('querycache', function($table) {
            $table->increments('id');
            $table->varbinary('qc_type', 32)->index();
            $table->integer('qc_value')->unsigned();
            $table->integer('qc_namespace');
            $table->varbinary('qc_title', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('querycache');
    }

}