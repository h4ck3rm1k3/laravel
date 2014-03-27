<?php

use Illuminate\Database\Migrations\Migration;

class CreateLanglinksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langlinks', function($table) {
            $table->increments('id');
            $table->integer('ll_from')->unsigned()->index();
            $table->varbinary('ll_lang', 20)->index();
            $table->varbinary('ll_title', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('langlinks');
    }

}