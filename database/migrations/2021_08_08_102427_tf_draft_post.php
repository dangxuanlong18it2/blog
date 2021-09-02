<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TfDraftPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_draft_post', function (Blueprint $table) {
            $table->increments('tf_draft_id')->key();
            $table->datetime('tf_draft_date');
            $table->string('tf_draft_title',500);
            $table->string('tf_draft_titleseo',500);
            $table->string('tf_draft_author',100);
            $table->string('tf_draft_meta',500);
            $table->string('tf_draft_url',500);
            $table->string('tf_draft_sapo',500);
            $table->string('tf_draft_key',100)->nullable();
            $table->string('tf_draft_image',5000)->nullable();
            $table->string('tf_draft_content',5000);
            $table->integer('tf_draft_content_length')->nullable();
            $table->integer('tf_draft_point')->nullable();
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
        Schema::dropIfExists('tf_draft_post');
    }
}
