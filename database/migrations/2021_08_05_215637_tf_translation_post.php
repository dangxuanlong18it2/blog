<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TfTranslationPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_translation_post', function (Blueprint $table) {
            $table->increments('tf_tran_post_id')->key();
            $table->integer('tf_lang_id');
            $table->string('tf_post_text',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tf_translation_post');
    }
}
