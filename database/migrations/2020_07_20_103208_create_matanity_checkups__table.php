<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatanityCheckupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // matanity_checkupsテーブルの情報
        Schema::create('maternity_checkups', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('pregnancy_week');
            $table->integer('fundal_height');
            $table->integer('weight');
            $table->integer('abdominal_circumference');
            $table->integer('blood_pressure');
            $table->string('edema', 50)->nullable();
            $table->string('urinal_protein', 50)->nullable();
            $table->string('urinal_sugar', 50)->nullable();
            $table->string('note', 50)->nullable();
            $table->unsignedInteger('user_id');
            $table->timestamps();
            // 外部キー
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('maternity_checkups');
    }
}
