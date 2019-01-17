<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('post_title',50);
            $table->string('post_author',25);
            $table->date('post_date');
            $table->text('post_type')->nullable();
            $table->boolean('post_active')->nullable();
            $table->boolean('post_featured')->nullable();
            $table->text('post_summary')->nullable();
            $table->string('post_summary_image')->nullable();
            $table->text('post_content')->nullable();
            $table->string('post_content_image')->nullable();
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
        Schema::dropIfExists('posts');
    }
}
