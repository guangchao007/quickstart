<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subsriptions', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->integer('user_id');
            $table->integer('topic_id');
            $table->boolean('tip_on_push'); // give tips when push topic news
            $table->nullableTimestamps();

            $table->index(['user_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subsriptions');
    }
}
