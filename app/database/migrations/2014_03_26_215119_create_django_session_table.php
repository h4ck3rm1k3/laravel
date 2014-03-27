<?php

use Illuminate\Database\Migrations\Migration;

class CreateDjangosessionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('django_session', function($table) {
            $table->increments('id');
            $table->string('session_key', 40)->primary();
            $table->longtext('session_data');
            $table->dateTime('expire_date')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('django_session');
    }

}