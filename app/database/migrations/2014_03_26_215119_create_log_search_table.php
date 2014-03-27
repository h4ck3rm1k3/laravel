<?php

use Illuminate\Database\Migrations\Migration;

class CreateLogsearchTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_search', function($table) {
            $table->increments('id');
            $table->varbinary('ls_field', 32)->index();
            $table->varbinary('ls_value', 255);
            $table->integer('ls_log_id')->unsigned()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('log_search');
    }

}