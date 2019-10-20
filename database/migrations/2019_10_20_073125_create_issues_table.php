<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuesTable extends Migration
{
    public function up()
    {
        Schema::create('issues', function (Blueprint $collection) {
            $collection->string('columns');
            $collection->string('template_id');
            $collection->string('histories');
            $collection->string('activities');
            $collection->string('parent_id');
            $collection->string('task_id');
            $collection->string('created_by');
            $collection->softDeletes();
            $collection->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('issues');
    }
}
