<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskSequencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_sequences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
            $table->integer('task_1_id')->unsigned();
            $table->foreign('task_1_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_2_id')->unsigned();
            $table->foreign('task_2_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_3_id')->unsigned();
            $table->foreign('task_3_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_4_id')->unsigned();
            $table->foreign('task_4_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_5_id')->unsigned();
            $table->foreign('task_5_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_6_id')->unsigned();
            $table->foreign('task_6_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_7_id')->unsigned();
            $table->foreign('task_7_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_8_id')->unsigned();
            $table->foreign('task_8_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_9_id')->unsigned();
            $table->foreign('task_9_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_10_id')->unsigned();
            $table->foreign('task_10_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_11_id')->unsigned();
            $table->foreign('task_11_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_12_id')->unsigned();
            $table->foreign('task_12_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_13_id')->unsigned();
            $table->foreign('task_13_id')->references('id')->on('tasks')->onDelete('cascade');
            $table->integer('task_14_id')->unsigned();
            $table->foreign('task_14_id')->references('id')->on('tasks')->onDelete('cascade');
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
        Schema::dropIfExists('task_sequences');
    }
}
