<?php

use Illuminate\Database\Migrations\Migration;

class CreateSearchindexTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('searchindex', function($table) {
            $table->increments('id');
            $table->integer('si_page')->unsigned()->unique();
            $table->string('si_title', 255)->index();
            $table->mediumtext('si_text')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('searchindex');
    }

}