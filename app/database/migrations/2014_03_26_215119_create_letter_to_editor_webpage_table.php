<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorwebpageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_webpage', function($table) {
            $table->increments('id');
            $table->string('url', 200)->primary();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_webpage');
    }

}