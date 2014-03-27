<?php

use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function($table) {
            $table->increments('cat_id');
            $table->varbinary('cat_title', 255)->unique();
            $table->integer('cat_pages')->index();
            $table->integer('cat_subcats');
            $table->integer('cat_files');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('category');
    }

}