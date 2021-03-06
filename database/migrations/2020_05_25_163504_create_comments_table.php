<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $collection) {
            // $collection->bigIncrements('id');
            $collection->index('user_id');
            $collection->index('post_id');
            $collection->index('parent_id')->nullable();
            $collection->text('content');
            $collection->timestamps();
            $collection->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $collection->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $collection->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}