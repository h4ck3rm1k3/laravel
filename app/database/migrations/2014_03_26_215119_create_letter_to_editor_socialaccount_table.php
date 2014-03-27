<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorsocialaccountTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_socialaccount', function($table) {
            $table->increments('id');
            $table->string('site_id', 200)->index();
            $table->string('name', 50);
            $table->string('page_id', 200)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_socialaccount');
    }

}