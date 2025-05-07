<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('email');
            $table->string('sign_in_at');
            $table->string('log_in_ip');
            $table->string('browser')->nullable();
            $table->string('device')->nullable();
            $table->integer('event')->nullable();
            $table->integer('action')->nullable();
            $table->integer('intended_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_logs');
    }
}
