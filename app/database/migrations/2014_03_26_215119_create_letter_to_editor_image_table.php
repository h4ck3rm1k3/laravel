<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorimageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_image', function($table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('image', 100);
            $table->string('caption', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_image');
    }

}