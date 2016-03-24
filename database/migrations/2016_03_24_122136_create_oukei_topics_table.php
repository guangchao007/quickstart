<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOukeiTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oukei_topics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('intro');
            $table->string('schedule'); // cron schedule like * * * * * *
            $table->string('driver'); // the background driver
            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('oukei_topics');
    }
}
