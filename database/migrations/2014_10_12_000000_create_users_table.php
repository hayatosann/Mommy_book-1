<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // usersテーブルの情報
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname', 20);
            // nullable: nullを入れられるようにする
            $table->string('gender', 10)->nullable();
            $table->integer('zipcode');
            // ->unique(): 重複した値が入らないようにする　
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('birthdate')->nullable();
            $table->rememberToken();
            // timestampsが空の値のままで、created_atとupdated_atをかねる
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
        Schema::dropIfExists('users');
    }
}
