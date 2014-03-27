<?php

use Illuminate\Database\Migrations\Migration;

class CreateRedirectTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('redirect', function($table) {
            $table->increments('id');
            $table->integer('rd_from')->unsigned()->primary();
            $table->integer('rd_namespace')->index();
            $table->varbinary('rd_title', 255);
            $table->varbinary('rd_interwiki', 32)->nullable();
            $table->varbinary('rd_fragment', 255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('redirect');
    }

}