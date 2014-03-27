<?php

use Illuminate\Database\Migrations\Migration;

class CreateSitesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sites', function($table) {
            $table->increments('site_id');
            $table->varbinary('site_global_key', 32)->unique();
            $table->varbinary('site_type', 32)->index();
            $table->varbinary('site_group', 32)->index();
            $table->varbinary('site_source', 32)->index();
            $table->varbinary('site_language', 32)->index();
            $table->varbinary('site_protocol', 32)->index();
            $table->varbinary('site_domain', 255)->index();
            $table->binary('site_data');
            $table->boolean('site_forward')->index();
            $table->binary('site_config');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sites');
    }

}