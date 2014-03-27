<?php

use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job', function($table) {
            $table->increments('job_id');
            $table->varbinary('job_cmd', 60)->index();
            $table->integer('job_namespace');
            $table->varbinary('job_title', 255);
            $table->varbinary('job_timestamp', 14)->nullable()->index();
            $table->binary('job_params');
            $table->integer('job_random')->unsigned();
            $table->integer('job_attempts')->unsigned();
            $table->varbinary('job_token', 32);
            $table->varbinary('job_token_timestamp', 14)->nullable();
            $table->varbinary('job_sha1', 32)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('job');
    }

}