<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $collection) {
            $collection->string('name');
            $collection->string('code');
            $collection->unique('email');
            $collection->string('password', 64);
            $collection->softDeletes();
            $collection->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('users');
    }
}
