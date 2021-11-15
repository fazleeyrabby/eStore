<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefCategorySubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_category_sub', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cat_id')->unsigned();
            $table->longText('image');
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
        Schema::dropIfExists('ref_category_sub');
    }
}
