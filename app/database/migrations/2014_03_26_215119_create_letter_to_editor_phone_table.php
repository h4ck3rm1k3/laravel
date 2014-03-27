<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorphoneTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_phone', function($table) {
            $table->increments('id');
            $table->string('webpage_ptr_id', 200)->primary();
            $table->string('number', 50);
            $table->string('role', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_phone');
    }

}