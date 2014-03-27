<?php

use Illuminate\Database\Migrations\Migration;

class CreateProtectedtitlesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('protected_titles', function($table) {
            $table->increments('id');
            $table->integer('pt_namespace')->index();
            $table->varbinary('pt_title', 255);
            $table->integer('pt_user')->unsigned();
            $table->tinyblob('pt_reason')->nullable();
            $table->binary('pt_timestamp', 14)->index();
            $table->varbinary('pt_expiry', 14);
            $table->varbinary('pt_create_perm', 60);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('protected_titles');
    }

}