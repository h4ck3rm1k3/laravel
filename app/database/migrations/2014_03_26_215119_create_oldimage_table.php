<?php

use Illuminate\Database\Migrations\Migration;

class CreateOldimageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oldimage', function($table) {
            $table->increments('id');
            $table->varbinary('oi_name', 255)->index();
            $table->varbinary('oi_archive_name', 255);
            $table->integer('oi_size')->unsigned();
            $table->integer('oi_width');
            $table->integer('oi_height');
            $table->integer('oi_bits');
            $table->tinyblob('oi_description');
            $table->integer('oi_user')->unsigned();
            $table->varbinary('oi_user_text', 255)->index();
            $table->binary('oi_timestamp', 14)->default("              ");
            $table->mediumblob('oi_metadata');
            $table->enum('oi_media_type', array("UNKNOWN", "BITMAP", "DRAWING", "AUDIO", "VIDEO", "MULTIMEDIA", "OFFICE", "TEXT", "EXECUTABLE", "ARCHIVE"))->nullable();
            $table->enum('oi_major_mime', array("unknown", "application", "audio", "image", "text", "video", "message", "model", "multipart"))->default("unknown");
            $table->varbinary('oi_minor_mime', 100)->default("unknown");
            $table->boolean('oi_deleted')->unsigned();
            $table->varbinary('oi_sha1', 32)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('oldimage');
    }

}