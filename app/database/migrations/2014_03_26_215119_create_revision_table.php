<?php

use Illuminate\Database\Migrations\Migration;

class CreateRevisionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revision', function($table) {
            $table->increments('rev_id');
            $table->integer('rev_page')->unsigned()->index();
            $table->integer('rev_text_id')->unsigned();
            $table->tinyblob('rev_comment');
            $table->integer('rev_user')->unsigned()->index();
            $table->varbinary('rev_user_text', 255)->index();
            $table->binary('rev_timestamp', 14)->default("              ")->index();
            $table->boolean('rev_minor_edit')->unsigned();
            $table->boolean('rev_deleted')->unsigned();
            $table->integer('rev_len')->nullable()->unsigned();
            $table->integer('rev_parent_id')->nullable()->unsigned();
            $table->varbinary('rev_sha1', 32);
            $table->varbinary('rev_content_model', 32)->nullable();
            $table->varbinary('rev_content_format', 64)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('revision');
    }

}