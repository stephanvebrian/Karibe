<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('short_id')->unique();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('view_count')->default(0);
            $table->unsignedBigInteger('answer_count')->default(0);
            $table->unsignedBigInteger('comment_count')->default(0);
            $table->string('slug');
            $table->string('title');
            $table->longText('body');	
            $table->boolean('post_lock')->default(false);	
            $table->boolean('comment_lock')->default(false);	
            $table->boolean('answer_lock')->default(false);	
            $table->timestamps();
            $table->softDeletes();
            // $table->foreign('owner_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('type_id')->references('id')->on('posttypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
