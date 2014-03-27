<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditornewspapercirculationTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_newspaper_circulation', function($table) {
            $table->increments('id');
            $table->string('newspaper_id', 50)->index();
            $table->integer('circulationhistory_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_newspaper_circulation');
    }

}