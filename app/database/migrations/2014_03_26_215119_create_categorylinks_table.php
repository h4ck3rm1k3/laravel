<?php

use Illuminate\Database\Migrations\Migration;

class CreateCategorylinksTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorylinks', function($table) {
            $table->increments('id');
            $table->integer('cl_from')->unsigned()->index();
            $table->varbinary('cl_to', 255)->index();
            $table->varbinary('cl_sortkey', 230);
            $table->varbinary('cl_sortkey_prefix', 255);
            $table->timestamp('cl_timestamp')->default("CURRENT_TIMESTAMP");
            $table->varbinary('cl_collation', 32)->index();
            $table->enum('cl_type', array("page", "subcat", "file"))->default("page");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('categorylinks');
    }

}