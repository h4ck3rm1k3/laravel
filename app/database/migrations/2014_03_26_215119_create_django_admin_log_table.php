<?php

use Illuminate\Database\Migrations\Migration;

class CreateDjangoadminlogTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('django_admin_log', function($table) {
            $table->increments('id');
            $table->dateTime('action_time');
            $table->integer('user_id')->index();
            $table->integer('content_type_id')->nullable()->index();
            $table->longtext('object_id')->nullable();
            $table->string('object_repr', 200);
            $table->smallInteger('action_flag')->unsigned();
            $table->longtext('change_message');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('django_admin_log');
    }

}