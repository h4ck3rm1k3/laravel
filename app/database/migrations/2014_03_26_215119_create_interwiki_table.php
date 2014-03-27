<?php

use Illuminate\Database\Migrations\Migration;

class CreateInterwikiTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interwiki', function($table) {
            $table->increments('id');
            $table->varbinary('iw_prefix', 32)->unique();
            $table->binary('iw_url');
            $table->binary('iw_api');
            $table->varbinary('iw_wikiid', 64);
            $table->boolean('iw_local');
            $table->boolean('iw_trans');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('interwiki');
    }

}