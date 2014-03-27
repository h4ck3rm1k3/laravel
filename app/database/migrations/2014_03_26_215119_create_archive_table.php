<?php

use Illuminate\Database\Migrations\Migration;

class CreateArchiveTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archive', function($table) {
            $table->increments('ar_id');
            $table->integer('ar_namespace')->index();
            $table->varbinary('ar_title', 255);
            $table->mediumblob('ar_text');
            $table->tinyblob('ar_comment');
            $table->integer('ar_user')->unsigned();
            $table->varbinary('ar_user_text', 255)->index();
            $table->binary('ar_timestamp', 14)->default("              ");
            $table->boolean('ar_minor_edit');
            $table->tinyblob('ar_flags');
            $table->integer('ar_rev_id')->nullable()->unsigned()->index();
            $table->integer('ar_text_id')->nullable()->unsigned();
            $table->boolean('ar_deleted')->unsigned();
            $table->integer('ar_len')->nullable()->unsigned();
            $table->integer('ar_page_id')->nullable()->unsigned();
            $table->integer('ar_parent_id')->nullable()->unsigned();
            $table->varbinary('ar_sha1', 32);
            $table->varbinary('ar_content_model', 32)->nullable();
            $table->varbinary('ar_content_format', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('archive');
    }

}