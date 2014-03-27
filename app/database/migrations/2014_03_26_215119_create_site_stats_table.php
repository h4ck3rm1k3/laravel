<?php

use Illuminate\Database\Migrations\Migration;

class CreateSitestatsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_stats', function($table) {
            $table->increments('id');
            $table->integer('ss_row_id')->unsigned()->unique();
            $table->bigInteger('ss_total_views')->nullable()->unsigned();
            $table->bigInteger('ss_total_edits')->nullable()->unsigned();
            $table->bigInteger('ss_good_articles')->nullable()->unsigned();
            $table->bigInteger('ss_total_pages')->default("-1")->nullable();
            $table->bigInteger('ss_users')->default("-1")->nullable();
            $table->bigInteger('ss_active_users')->default("-1")->nullable();
            $table->integer('ss_images')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('site_stats');
    }

}