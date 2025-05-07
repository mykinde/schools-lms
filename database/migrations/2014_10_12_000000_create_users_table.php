<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('matriculation_number')->unique();
            $table->string('level');
            $table->string('academic_session');
            $table->string('college');
            $table->string('department');
            $table->string('gender');
            $table->boolean('status')->default(0);
            $table->string('general')->nullable();
            $table->boolean('admin')->default(0);
            $table->string('keyword')->nullable();
            $table->string('birthyear')->nullable();
            $table->string('entryyear')->nullable();
            $table->string('nationality')->nullable();
            $table->string('stateoforigin')->nullable();
            $table->string('localgovt')->nullable();
            $table->string('religion')->nullable();
            $table->string('denominations')->nullable();
            $table->string('church')->nullable();
            $table->string('parish')->nullable();
            $table->string('clocation')->nullable();
            $table->string('parents')->nullable();
            $table->string('wbaptism')->nullable();
            $table->string('muslemb4')->nullable();
            $table->string('region')->nullable();
            $table->string('address_state')->nullable();
            $table->string('address_town')->nullable();
            $table->string('others')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
