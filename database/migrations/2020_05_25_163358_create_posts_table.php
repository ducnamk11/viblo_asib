<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;
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
        Schema::create('posts', function (Blueprint $collection) {
            // $table->bigIncrements('id');
            $collection->index('user_id');
            $collection->integer('find_key')->unique(); // make auto increment this field in controller
            $collection->string('title');
            $collection->text('content');
            $collection->string('image');
            $collection->boolean('status'); // Trạng thái này để làm gì, có nhiều hơn 2 trạng thái k?
            $collection->dateTime('publish_at')->nullable();
            $collection->timestamps();

            $collection->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
