<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorhistoryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_history', function($table) {
            $table->increments('id');
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
        Schema::drop('letter_to_editor_history');
    }

}