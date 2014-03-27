<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorwebcacheTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_webcache', function($table) {
            $table->increments('id');
            $table->string('page_id', 200)->index();
            $table->string('contents', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_webcache');
    }

}