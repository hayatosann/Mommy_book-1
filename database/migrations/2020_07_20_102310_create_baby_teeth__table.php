<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabyTeethTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // baby_teethテーブルの情報
        Schema::create('baby_teeth', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('baby_checkup_id');
            $table->string('teeth_decay', 50);
            $table->string('clearness', 50);
            $table->string('gingival_ mucous', 50);
            $table->string('teeth_allignment', 50);
            $table->string('oral-disease', 50)->nullable();
            $table->integer('replaced_teeth')->nullable();
            $table->timestamps();
            // 外部キー
            $table->foreign('baby_checkup_id')->references('id')->on('baby_checkups');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baby_teeth');
    }
}
