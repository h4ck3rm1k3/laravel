<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorwebsiteTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_website', function($table) {
            $table->increments('id');
            $table->string('domain', 255);
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
        Schema::drop('letter_to_editor_website');
    }

}