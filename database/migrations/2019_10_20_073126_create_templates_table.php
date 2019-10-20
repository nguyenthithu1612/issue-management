<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    public function up()
    {
        Schema::create('templates', function (Blueprint $collection) {
            $collection->string('name');
            $collection->string('columns');
            $collection->string('show_user_id');
            $collection->string('use_user_id');
            $collection->string('approve_user_id');
            $collection->string('view_user_id');
            $collection->string('created_by');
            $collection->string('activities');
            $collection->softDeletes();
            $collection->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('templates');
    }
}
