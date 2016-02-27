<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('post_id')->nullable();
            $table->integer('res_id')->nullable();
            $table->string('contributor');
            $table->string('title');
            $table->string('body');
            $table->string('fig_name')->nullable();
            $table->string('fig_mime')->nullable();
            $table->binary('fig_orig')->nullable();
            $table->binary('fig_thumbnail')->nullable();
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
        Schema::drop('posts');
    }
}
