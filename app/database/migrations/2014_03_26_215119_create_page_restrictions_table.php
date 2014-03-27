<?php

use Illuminate\Database\Migrations\Migration;

class CreatePagerestrictionsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_restrictions', function($table) {
            $table->increments('pr_id');
            $table->integer('pr_page')->index();
            $table->varbinary('pr_type', 60)->index();
            $table->varbinary('pr_level', 60)->index();
            $table->boolean('pr_cascade')->index();
            $table->integer('pr_user')->nullable();
            $table->varbinary('pr_expiry', 14)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('page_restrictions');
    }

}