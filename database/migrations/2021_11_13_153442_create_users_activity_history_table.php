<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersActivityHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_activity_history', function (Blueprint $table) {
            $table->id();
            $table->integer('activities_Id');
            $table->string('activities_by');
            $table->dateTime('activities_dt');
            $table->string('ip',20);
            $table->string('table_name',100);
            $table->integer('sys_link_cat_id');
            $table->integer('sys_link_group_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_activity_history');
    }
}
