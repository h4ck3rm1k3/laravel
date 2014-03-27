<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorpersonphoneTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_person_phone', function($table) {
            $table->increments('id');
            $table->integer('person_id')->index();
            $table->string('phone_id', 200)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_person_phone');
    }

}