<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTagGroupsTable extends Migration
{

    public function up()
    {
        if (!Schema::hasTable('tagging_tag_groups')) {
            Schema::create('tagging_tag_groups', function (Blueprint $table) {
                $table->increments('id');
                $table->string('slug', 125)->index();
                $table->string('name', 125);
            });
        }
    }

    public function down()
    {
        if (Schema::hasTable('tagging_tag_groups')) {
            Schema::drop('tagging_tag_groups');
        }
    }
}
