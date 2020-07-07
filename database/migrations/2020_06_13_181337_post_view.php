<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PostView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_views', function (Blueprint $collection) {
            $collection->index('user_id')->nullable();
            $collection->index('post_id');
            $collection->string('ip');
            $collection->string('user_agent');
            $collection->index('view_hash'); // sha1( ip|user_agent )
            $collection->foreign('user_id')->references('id')->on('users');
            $collection->foreign('post_id')->references('id')->on('posts');
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_views');
    }
}