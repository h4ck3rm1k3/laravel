<?php

use Illuminate\Database\Migrations\Migration;

class CreateRecentchangesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recentchanges', function($table) {
            $table->increments('rc_id');
            $table->varbinary('rc_timestamp', 14)->index();
            $table->varbinary('rc_cur_time', 14);
            $table->integer('rc_user')->unsigned();
            $table->varbinary('rc_user_text', 255)->index();
            $table->integer('rc_namespace')->index();
            $table->varbinary('rc_title', 255);
            $table->varbinary('rc_comment', 255);
            $table->boolean('rc_minor')->unsigned();
            $table->boolean('rc_bot')->unsigned();
            $table->boolean('rc_new')->unsigned()->index();
            $table->integer('rc_cur_id')->unsigned()->index();
            $table->integer('rc_this_oldid')->unsigned();
            $table->integer('rc_last_oldid')->unsigned();
            $table->boolean('rc_type')->unsigned();
            $table->varbinary('rc_source', 16);
            $table->boolean('rc_patrolled')->unsigned();
            $table->varbinary('rc_ip', 40)->index();
            $table->integer('rc_old_len')->nullable();
            $table->integer('rc_new_len')->nullable();
            $table->boolean('rc_deleted')->unsigned();
            $table->integer('rc_logid')->unsigned();
            $table->varbinary('rc_log_type', 255)->nullable();
            $table->varbinary('rc_log_action', 255)->nullable();
            $table->binary('rc_params')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('recentchanges');
    }

}