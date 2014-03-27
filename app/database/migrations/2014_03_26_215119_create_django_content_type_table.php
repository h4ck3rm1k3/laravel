<?php

use Illuminate\Database\Migrations\Migration;

class CreateDjangocontenttypeTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('django_content_type', function($table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('app_label', 100)->index();
            $table->string('model', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('django_content_type');
    }

}