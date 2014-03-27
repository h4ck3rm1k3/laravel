<?php

use Illuminate\Database\Migrations\Migration;

class CreatePagepropsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_props', function($table) {
            $table->increments('id');
            $table->integer('pp_page')->index();
            $table->varbinary('pp_propname', 60)->index();
            $table->binary('pp_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('page_props');
    }

}