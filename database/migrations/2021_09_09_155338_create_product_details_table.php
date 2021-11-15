<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id')->unsigned();
            $table->string('size');
            $table->string('color');
            $table->text('image');
            $table->tinyInteger('sts')->default(1);
            $table->integer('e_by')->unsigned();
            $table->dateTime('e_dt');  
            $table->integer('u_by')->unsigned();
            $table->dateTime('u_dt');  
            $table->integer('d_by')->unsigned();
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
        Schema::dropIfExists('product_details');
    }
}
