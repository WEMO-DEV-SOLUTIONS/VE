<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForumKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('forum_topics', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
            ->onDelete('CASCADE');
            $table->foreign('forum_category_id')
                ->references('id')
                ->on('forum_categories')
                ->onDelete('CASCADE');
        });

        Schema::table('forum_messages', function (Blueprint $table) {
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('forum_topics', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('forum_category_id');
        });
        Schema::table('forum_messages', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });*/
    }
}
