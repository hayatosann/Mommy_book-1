<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVaccinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // vaccinesテーブルの情報
        Schema::create('vaccines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->date('shot_date');
            $table->string('shot_place', 50)->nullable();
            $table->string('physician_sign', 50)->nullable();
            $table->integer('react')->nullable();
            $table->string('result', 50)->nullable();
            $table->string('hospital_name', 50);
            $table->string('manufacture_lot', 50);
            $table->text('remarks')->nullable();
            $table->unsignedInteger('baby_id');
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
        Schema::dropIfExists('vaccines');
    }
}
