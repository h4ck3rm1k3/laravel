<?php

use Illuminate\Database\Migrations\Migration;

class CreatePageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page', function($table) {
            $table->increments('page_id');
            $table->integer('page_namespace')->index();
            $table->varbinary('page_title', 255);
            $table->tinyblob('page_restrictions');
            $table->bigInteger('page_counter')->unsigned();
            $table->boolean('page_is_redirect')->unsigned()->index();
            $table->boolean('page_is_new')->unsigned();
            $table->double unsigned('page_random')->unsigned()->index();
            $table->binary('page_touched', 14)->default("              ");
            $table->varbinary('page_links_updated', 14)->nullable();
            $table->integer('page_latest')->unsigned();
            $table->integer('page_len')->unsigned()->index();
            $table->varbinary('page_content_model', 32)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('page');
    }

}