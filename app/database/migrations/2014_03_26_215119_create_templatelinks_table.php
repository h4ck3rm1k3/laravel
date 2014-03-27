<?php

use Illuminate\Database\Migrations\Migration;

class CreateTemplatelinksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templatelinks', function($table) {
            $table->increments('id');
            $table->integer('tl_from')->unsigned()->index();
            $table->integer('tl_namespace')->index();
            $table->varbinary('tl_title', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('templatelinks');
    }

}