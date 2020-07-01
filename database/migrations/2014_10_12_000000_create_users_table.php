<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;
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
        Schema::create('users', function (Blueprint $collection) {
            // $table->bigIncrements('id');
            $collection->increments('id');
            $collection->string('name');
            $collection->string('email')->unique();
            $collection->string('password')->nullable();
            $collection->string('avatar')->nullable();
            $collection->string('provider');
            $collection->string('provider_id');
            $collection->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
