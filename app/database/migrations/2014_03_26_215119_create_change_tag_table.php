<?php

use Illuminate\Database\Migrations\Migration;

class CreateChangetagTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('change_tag', function($table) {
            $table->increments('id');
            $table->integer('ct_rc_id')->nullable()->index();
            $table->integer('ct_log_id')->nullable()->index();
            $table->integer('ct_rev_id')->nullable()->index();
            $table->varbinary('ct_tag', 255)->index();
            $table->binary('ct_params')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('change_tag');
    }

}