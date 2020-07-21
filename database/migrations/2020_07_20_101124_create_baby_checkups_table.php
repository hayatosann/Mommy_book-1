<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabyCheckupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // baby_checkupsテーブルの情報
        Schema::create('baby_checkups', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('baby_id');
            $table->date('date');
            $table->integer('weight');
            $table->integer('height');
            $table->integer('chest')->nullable();
            $table->integer('head');
            $table->string('nutritional_status', 50);
            $table->string('food', 50);
            $table->string('eyes_disease', 50)->nullable();
            $table->string('ears_disease', 50)->nullable();
            $table->text('checkups');
            $table->text('guidance')->nullable();
            $table->string('supervisor_name', 50);
            $table->timestamps();
            // 外部キー
            $table->foreign('baby_id')->references('id')->on('babies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baby_checkups');
    }
}
