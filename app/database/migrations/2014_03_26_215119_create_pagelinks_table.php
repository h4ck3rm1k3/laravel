<?php

use Illuminate\Database\Migrations\Migration;

class CreatePagelinksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagelinks', function($table) {
            $table->increments('id');
            $table->integer('pl_from')->unsigned()->index();
            $table->integer('pl_namespace')->index();
            $table->varbinary('pl_title', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pagelinks');
    }

}