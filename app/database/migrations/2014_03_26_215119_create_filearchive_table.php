<?php

use Illuminate\Database\Migrations\Migration;

class CreateFilearchiveTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filearchive', function($table) {
            $table->increments('fa_id');
            $table->varbinary('fa_name', 255)->index();
            $table->varbinary('fa_archive_name', 255)->nullable();
            $table->varbinary('fa_storage_group', 16)->nullable()->index();
            $table->varbinary('fa_storage_key', 64)->nullable();
            $table->integer('fa_deleted_user')->nullable();
            $table->binary('fa_deleted_timestamp', 14)->default("              ")->nullable()->index();
            $table->binary('fa_deleted_reason')->nullable();
            $table->integer('fa_size')->nullable()->unsigned();
            $table->integer('fa_width')->nullable();
            $table->integer('fa_height')->nullable();
            $table->mediumblob('fa_metadata')->nullable();
            $table->integer('fa_bits')->nullable();
            $table->enum('fa_media_type', array("UNKNOWN", "BITMAP", "DRAWING", "AUDIO", "VIDEO", "MULTIMEDIA", "OFFICE", "TEXT", "EXECUTABLE", "ARCHIVE"))->nullable();
            $table->enum('fa_major_mime', array("unknown", "application", "audio", "image", "text", "video", "message", "model", "multipart"))->default("unknown")->nullable();
            $table->varbinary('fa_minor_mime', 100)->default("unknown")->nullable();
            $table->tinyblob('fa_description')->nullable();
            $table->integer('fa_user')->nullable()->unsigned();
            $table->varbinary('fa_user_text', 255)->nullable()->index();
            $table->binary('fa_timestamp', 14)->default("              ")->nullable();
            $table->boolean('fa_deleted')->unsigned();
            $table->varbinary('fa_sha1', 32)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('filearchive');
    }

}