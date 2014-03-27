<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorcirculationhistoryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_circulationhistory', function($table) {
            $table->increments('id');
            $table->integer('circulation')->nullable();
            $table->date('circulation_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_circulationhistory');
    }

}