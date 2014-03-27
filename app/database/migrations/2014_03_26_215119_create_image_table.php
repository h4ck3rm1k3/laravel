<?php

use Illuminate\Database\Migrations\Migration;

class CreateImageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image', function($table) {
            $table->increments('id');
            $table->varbinary('img_name', 255)->primary();
            $table->integer('img_size')->unsigned()->index();
            $table->integer('img_width');
            $table->integer('img_height');
            $table->mediumblob('img_metadata');
            $table->integer('img_bits');
            $table->enum('img_media_type', array("UNKNOWN", "BITMAP", "DRAWING", "AUDIO", "VIDEO", "MULTIMEDIA", "OFFICE", "TEXT", "EXECUTABLE", "ARCHIVE"))->nullable()->index();
            $table->enum('img_major_mime', array("unknown", "application", "audio", "image", "text", "video", "message", "model", "multipart"))->default("unknown");
            $table->varbinary('img_minor_mime', 100)->default("unknown");
            $table->tinyblob('img_description');
            $table->integer('img_user')->unsigned();
            $table->varbinary('img_user_text', 255)->index();
            $table->varbinary('img_timestamp', 14)->index();
            $table->varbinary('img_sha1', 32)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('image');
    }

}