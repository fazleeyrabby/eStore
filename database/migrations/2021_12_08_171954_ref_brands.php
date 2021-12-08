<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RefBrands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_brands', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name',250);
            $table->integer('cat_id');
            $table->integer('code')->unsigned();
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
        //
    }
}
