<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsPostWithCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_post_with_category', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('news_post_id')->unsigned()->nullable();
            $table->foreign('news_post_id')->references('id')->on('news_post')->onDelete('cascade');
            $table->bigInteger('post_category_id')->unsigned()->nullable();
            $table->foreign('post_category_id')->references('id')->on('post_category')->onDelete('cascade');
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
        Schema::dropIfExists('news_post_with_category');
    }
}