<?php

use Illuminate\Database\Migrations\Migration;

class CreateIpblocksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ipblocks', function($table) {
            $table->increments('ipb_id');
            $table->tinyblob('ipb_address')->index();
            $table->integer('ipb_user')->unsigned()->index();
            $table->integer('ipb_by')->unsigned();
            $table->varbinary('ipb_by_text', 255);
            $table->tinyblob('ipb_reason');
            $table->binary('ipb_timestamp', 14)->default("              ")->index();
            $table->boolean('ipb_auto');
            $table->boolean('ipb_anon_only');
            $table->boolean('ipb_create_account')->default("1");
            $table->boolean('ipb_enable_autoblock')->default("1");
            $table->varbinary('ipb_expiry', 14)->index();
            $table->tinyblob('ipb_range_start')->index();
            $table->tinyblob('ipb_range_end');
            $table->boolean('ipb_deleted');
            $table->boolean('ipb_block_email');
            $table->boolean('ipb_allow_usertalk');
            $table->integer('ipb_parent_block_id')->nullable()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ipblocks');
    }

}