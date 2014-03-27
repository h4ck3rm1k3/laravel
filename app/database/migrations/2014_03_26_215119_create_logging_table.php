<?php

use Illuminate\Database\Migrations\Migration;

class CreateLoggingTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logging', function($table) {
            $table->increments('log_id');
            $table->varbinary('log_type', 32)->index();
            $table->varbinary('log_action', 32);
            $table->binary('log_timestamp', 14)->default("19700101000000")->index();
            $table->integer('log_user')->unsigned()->index();
            $table->varbinary('log_user_text', 255)->index();
            $table->integer('log_namespace')->index();
            $table->varbinary('log_title', 255);
            $table->integer('log_page')->nullable()->unsigned()->index();
            $table->varbinary('log_comment', 255);
            $table->binary('log_params');
            $table->boolean('log_deleted')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('logging');
    }

}