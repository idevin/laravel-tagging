<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateTagsTable extends Migration
{

    public function up()
    {
        if (!Schema::hasTable('tagging_tags')) {
            Schema::table('tagging_tags', function ($table) {
                $table->foreign('tag_group_id')->references('id')->on('tagging_tag_groups');
            });
        }
    }


    public function down()
    {
        if (Schema::hasTable('tagging_tags')) {
            Schema::disableForeignKeyConstraints();
            Schema::table('tagging_tags', function ($table) {
                $table->dropForeign('tagging_tags_tag_group_id_foreign');
            });
        }
    }
}
