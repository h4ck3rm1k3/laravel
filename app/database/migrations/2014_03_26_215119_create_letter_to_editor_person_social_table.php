<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorpersonsocialTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_person_social', function($table) {
            $table->increments('id');
            $table->integer('person_id')->index();
            $table->integer('socialaccount_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_person_social');
    }

}