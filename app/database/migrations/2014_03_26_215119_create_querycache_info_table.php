<?php

use Illuminate\Database\Migrations\Migration;

class CreateQuerycacheinfoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('querycache_info', function($table) {
            $table->increments('id');
            $table->varbinary('qci_type', 32)->unique();
            $table->binary('qci_timestamp', 14)->default("19700101000000");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('querycache_info');
    }

}