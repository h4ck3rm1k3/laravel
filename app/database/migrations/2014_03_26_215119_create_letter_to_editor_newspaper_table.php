<?php

use Illuminate\Database\Migrations\Migration;

class CreateLettertoeditornewspaperTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_to_editor_newspaper', function($table) {
            $table->increments('id');
            $table->integer('company_ptr_id')->unique();
            $table->string('newspaper_name', 50)->primary();
            $table->string('newspaper_type', 50);
            $table->string('newspaper_format', 50);
            $table->integer('dirinteractive_id')->index();
            $table->string('political', 50);
            $table->string('language', 50);
            $table->date('ceased_publication');
            $table->string('ISSN', 50);
            $table->string('oclc', 50);
            $table->string('free_id', 200)->index();
            $table->string('sister_newspapers_id', 50)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('letter_to_editor_newspaper');
    }

}