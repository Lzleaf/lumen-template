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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50)->comment('用户名');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('username', 50)->unique()->comment('登录名');
            $table->string('password')->comment('密码');
            $table->string('phone', 11)->unique()->nullable()->comment('手机号');
            $table->string('openid')->unique()->nullable()->comment('openid');
            $table->string('unionid')->unique()->nullable()->comment('unionid');
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
