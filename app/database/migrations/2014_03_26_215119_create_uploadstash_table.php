<?php

use Illuminate\Database\Migrations\Migration;

class CreateUploadstashTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploadstash', function($table) {
            $table->increments('us_id');
            $table->integer('us_user')->unsigned()->index();
            $table->varbinary('us_key', 255)->unique();
            $table->varbinary('us_orig_path', 255);
            $table->varbinary('us_path', 255);
            $table->varbinary('us_source_type', 50)->nullable();
            $table->varbinary('us_timestamp', 14)->index();
            $table->varbinary('us_status', 50);
            $table->integer('us_chunk_inx')->nullable()->unsigned();
            $table->binary('us_props')->nullable();
            $table->integer('us_size')->unsigned();
            $table->varbinary('us_sha1', 31);
            $table->varbinary('us_mime', 255)->nullable();
            $table->enum('us_media_type', array("UNKNOWN", "BITMAP", "DRAWING", "AUDIO", "VIDEO", "MULTIMEDIA", "OFFICE", "TEXT", "EXECUTABLE", "ARCHIVE"))->nullable();
            $table->integer('us_image_width')->nullable()->unsigned();
            $table->integer('us_image_height')->nullable()->unsigned();
            $table->smallInteger('us_image_bits')->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('uploadstash');
    }

}