<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
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
            $table->bolean('published')->default(1);
            $table->softDeletes();          
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
        Schema::drop('lessons');
    }
}
