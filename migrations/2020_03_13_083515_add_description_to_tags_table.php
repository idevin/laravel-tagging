<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddDescriptionToTagsTable extends Migration
{

    public function up()
    {
        if (!Schema::hasTable('tagging_tags')) {
            Schema::table('tagging_tags', function ($table) {
                $table->text('description')->nullable();
            });
        }
    }


    public function down()
    {
        if (Schema::hasTable('tagging_tags')) {
            Schema::table('tagging_tags', function ($table) {
                $table->dropColumn('description');
            });
        }
    }
}
