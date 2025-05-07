<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('auth_id');
            $table->integer('lecturer_id');
            $table->integer('course_id');
            $table->string('title');
            $table->string('category'); //note | web | audio | video
            $table->text('body')->nullable();
            $table->string('files')->nullable();
            $table->string('url')->nullable(); //youtube
            $table->string('department')->nullable();
             $table->integer('session_id');
            $table->integer('semester_id');
            $table->boolean('published')->default(1);
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
        Schema::dropIfExists('lectures');
    }
}
