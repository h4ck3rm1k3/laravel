<?php

use Illuminate\Database\Migrations\Migration;

class CreateTagsummaryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag_summary', function($table) {
            $table->increments('id');
            $table->integer('ts_rc_id')->nullable()->unique();
            $table->integer('ts_log_id')->nullable()->unique();
            $table->integer('ts_rev_id')->nullable()->unique();
            $table->binary('ts_tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tag_summary');
    }

}