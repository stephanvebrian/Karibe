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
            $table->id();
            $table->string('email')->unique();
            $table->string('display_name');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->integer('age')->nullable();
            $table->longText('about_me');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('phone');
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('login_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
