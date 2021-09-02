<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TfCustomer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tf_customer', function (Blueprint $table) {
            $table->increments('tf_customer_id')->key();
            $table->string('tf_customer_name',100);
            $table->string('tf_customer_email',200);
            $table->string('tf_password',100);
            $table->integer('tf_customer_phone')->nullable();
            $table->string('tf_customer_address',1000)->nullable();
            $table->string('tf_customer_avatar',2000)->nullable();
            $table->string('tf_trans_customer_id')->nullable();
            $table->integer('tf_level');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tf_customer');
    }
}
