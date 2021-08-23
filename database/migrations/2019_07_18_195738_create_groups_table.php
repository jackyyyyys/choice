<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('current_task')->default('0');
            $table->integer('score')->default(0);
            $table->boolean('has_hostage')->default(TRUE);
            $table->boolean('has_patient')->default(FALSE);
            $table->boolean('has_failed')->default(FALSE);
            $table->boolean('t1')->default(FALSE);
            $table->boolean('t2')->default(FALSE);
            $table->boolean('t3')->default(FALSE);
            $table->boolean('t4')->default(FALSE);
            $table->boolean('t5')->default(FALSE);
            $table->boolean('t6')->default(FALSE);
            $table->boolean('t7')->default(FALSE);
            $table->boolean('t8')->default(FALSE);
            $table->boolean('t9')->default(FALSE);
            $table->boolean('t10')->default(FALSE);
            $table->boolean('t11')->default(FALSE);
            $table->boolean('t12')->default(FALSE);
            $table->boolean('t13')->default(FALSE);
            $table->boolean('t14')->default(FALSE);
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
        Schema::dropIfExists('groups');
    }
}
