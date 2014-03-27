<?php

use Illuminate\Database\Migrations\Migration;

class CreateDjangomigrationsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('django_migrations', function($table) {
            $table->increments('id');
            $table->string('app', 255);
            $table->string('name', 255);
            $table->dateTime('applied');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('django_migrations');
    }

}