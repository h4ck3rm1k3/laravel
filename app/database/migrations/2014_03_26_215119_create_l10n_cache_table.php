<?php

use Illuminate\Database\Migrations\Migration;

class CreateL10ncacheTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('l10n_cache', function($table) {
            $table->increments('id');
            $table->varbinary('lc_lang', 32)->index();
            $table->varbinary('lc_key', 255);
            $table->mediumblob('lc_value');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('l10n_cache');
    }

}