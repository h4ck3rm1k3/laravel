<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorcompanyTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_company', function($table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->integer('logo_id')->index();
            $table->integer('image_id')->index();
            $table->integer('headquarters_id')->index();
            $table->string('website_id', 200)->index();
            $table->date('foundation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_company');
    }

}