<?php

use Illuminate\Database\Migrations\Migration;

class CreateMsgresourcelinksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('msg_resource_links', function($table) {
            $table->increments('id');
            $table->varbinary('mrl_resource', 255);
            $table->varbinary('mrl_message', 255)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('msg_resource_links');
    }

}