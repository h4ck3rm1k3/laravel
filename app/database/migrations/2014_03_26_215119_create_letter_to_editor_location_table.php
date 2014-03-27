<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorlocationTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_location', function($table) {
            $table->increments('id');
            $table->string('name', 30);
            $table->string('address', 50);
            $table->string('city', 60);
            $table->string('state_province', 30);
            $table->string('country', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_location');
    }

}