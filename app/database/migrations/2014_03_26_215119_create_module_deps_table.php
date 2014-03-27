<?php

use Illuminate\Database\Migrations\Migration;

class CreateModuledepsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_deps', function($table) {
            $table->increments('id');
            $table->varbinary('md_module', 255)->index();
            $table->varbinary('md_skin', 32);
            $table->mediumblob('md_deps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('module_deps');
    }

}