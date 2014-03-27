<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorpersonroleTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_personrole', function($table) {
            $table->increments('id');
            $table->string('role', 50);
            $table->integer('person_id')->index();
            $table->date('start_date');
            $table->date('end_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_personrole');
    }

}