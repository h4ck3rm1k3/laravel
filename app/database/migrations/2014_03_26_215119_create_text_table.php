<?php

use Illuminate\Database\Migrations\Migration;

class CreateTextTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text', function($table) {
            $table->increments('old_id');
            $table->mediumblob('old_text');
            $table->tinyblob('old_flags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('text');
    }

}