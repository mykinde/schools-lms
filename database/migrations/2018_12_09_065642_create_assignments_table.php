<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auth_id');
            $table->integer('user_id');
            $table->integer('course_id'); //new
            $table->string('title');
            $table->text('body');
            $table->string('files')->nullable();
            $table->string('submission_date')->nullable();
            $table->string('submission_deadline')->nullable(); //new
            $table->boolean('published')->nullable()->default(true);
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
        Schema::dropIfExists('assignments');
    }
}
