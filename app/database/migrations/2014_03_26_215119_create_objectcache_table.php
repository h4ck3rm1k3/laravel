<?php

use Illuminate\Database\Migrations\Migration;

class CreateObjectcacheTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectcache', function($table) {
            $table->increments('id');
            $table->varbinary('keyname', 255)->primary();
            $table->mediumblob('value')->nullable();
            $table->dateTime('exptime')->nullable()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('objectcache');
    }

}