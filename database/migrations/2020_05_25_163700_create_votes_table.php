<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $collection) {
            //$collection->bigIncrements('id');
            $collection->index('user_id');
            $collection->index('post_id');
             $collection->integer('vote')->default(0);
            $collection->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $collection->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votes');
    }
}