<?php

use Illuminate\Database\Migrations\Migration;

class CreateSiteidentifiersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_identifiers', function($table) {
            $table->increments('id');
            $table->integer('si_site')->unsigned()->index();
            $table->varbinary('si_type', 32)->index();
            $table->varbinary('si_key', 32)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('site_identifiers');
    }

}