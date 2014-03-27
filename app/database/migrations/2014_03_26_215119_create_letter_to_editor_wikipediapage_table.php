<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorwikipediapageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_wikipediapage', function($table) {
            $table->increments('id');
            $table->string('webpage_ptr_id', 200)->primary();
            $table->string('lang', 2);
            $table->string('name', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_wikipediapage');
    }

}