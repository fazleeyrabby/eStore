<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RefProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cat_id');
            $table->integer('sub_cat_id');
            $table->string('name',255);
            $table->integer('code');
            $table->tinyInteger('sts')->default(1);
            $table->integer('e_by');
            $table->dateTime('e_dt');  
            $table->integer('u_by');
            $table->dateTime('u_dt');  
            $table->integer('d_by');
            $table->dateTime('d_dt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_products');
    }
}
