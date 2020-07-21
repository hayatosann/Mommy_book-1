<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBabiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // babiesテーブルの情報
        Schema::create('babies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname', 20)->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('status', 20);
            $table->date('birthdate');
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
        Schema::dropIfExists('babies');
    }
}
