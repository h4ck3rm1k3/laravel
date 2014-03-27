<?php

use Illuminate\Database\Migrations\Migration;

class CreateWatchlistTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watchlist', function($table) {
            $table->increments('id');
            $table->integer('wl_user')->unsigned()->index();
            $table->integer('wl_namespace')->index();
            $table->varbinary('wl_title', 255);
            $table->varbinary('wl_notificationtimestamp', 14)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('watchlist');
    }

}