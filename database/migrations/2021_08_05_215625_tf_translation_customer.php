<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TfTranslationCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_translation_customer', function (Blueprint $table) {
            $table->increments('tf_tran_customer_id')->key();
            $table->integer('tf_lang_id');
            $table->string('tf_customer_text',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tf_translation_customer');
    }
}
