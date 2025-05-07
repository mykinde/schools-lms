<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('auth_id');
            $table->integer('user_id')->unique();
            $table->string('phone')->nullable();
            $table->string('title')->nullable();
            $table->string('gender');
            $table->string('birthdate')->nullable();           
            $table->string('country');
            $table->string('stateoforigin'); 
            $table->string('localgovt')->nullable();
            $table->string('religion');
            $table->Text('address');
            $table->Text('contactaddress')->nullable();
            $table->string('passport')->default('images/no-passport.jpg')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('profiles');
    }
}
