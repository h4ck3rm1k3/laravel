<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditorcompanystaffTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_company_staff', function($table) {
            $table->increments('id');
            $table->integer('company_id')->index();
            $table->integer('personrole_id')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_company_staff');
    }

}