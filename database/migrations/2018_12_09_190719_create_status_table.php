<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auth_id');
            $table->integer('course_id');
            $table->integer('resources_name');
            $table->integer('resources_id');
            $table->integer('student_id');
            $table->boolean('access'); //? yes or no
            $table->timestamp('read_at')->nullable(); //new
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
        Schema::dropIfExists('status');
    }
}
