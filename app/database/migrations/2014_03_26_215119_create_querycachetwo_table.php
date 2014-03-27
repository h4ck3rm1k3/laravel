<?php

use Illuminate\Database\Migrations\Migration;

class CreateQuerycachetwoTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('querycachetwo', function($table) {
            $table->increments('id');
            $table->varbinary('qcc_type', 32)->index();
            $table->integer('qcc_value')->unsigned();
            $table->integer('qcc_namespace');
            $table->varbinary('qcc_title', 255);
            $table->integer('qcc_namespacetwo');
            $table->varbinary('qcc_titletwo', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('querycachetwo');
    }

}