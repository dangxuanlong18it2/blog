<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TfPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_post', function (Blueprint $table) {
            $table->increments('tf_post_id')->key();
            $table->datetime('tf_post_date');
            $table->string('tf_post_title',500);
            $table->string('tf_post_titleseo',500);
            $table->string('tf_post_author',100);
            $table->string('tf_post_meta',500);
            $table->string('tf_post_url',500);
            $table->string('tf_post_sapo',500)->nullable();
            $table->string('tf_post_key',100)->nullable();
            $table->string('tf_post_image',5000)->nullable();
            $table->string('tf_post_content',5000);
            $table->integer('tf_post_content_length')->nullable();
            $table->integer('tf_post_point')->nullable();
            $table->integer('tf_cmt_id')->nullable();
            $table->integer('tf_tran_post_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tf_post');
    }
}
