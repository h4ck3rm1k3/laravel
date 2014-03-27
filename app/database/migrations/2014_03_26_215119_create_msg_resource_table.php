<?php

use Illuminate\Database\Migrations\Migration;

class CreateMsgresourceTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msg_resource', function($table) {
            $table->increments('id');
            $table->varbinary('mr_resource', 255)->index();
            $table->varbinary('mr_lang', 32);
            $table->mediumblob('mr_blob');
            $table->binary('mr_timestamp', 14);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('msg_resource');
    }

}