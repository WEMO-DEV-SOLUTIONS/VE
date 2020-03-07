<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('forum_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('content');
<<<<<<< HEAD
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('topic_id');
            $table->string('author_type');
=======
            $table->BigInteger('user_id');
            $table->BigInteger('topic_id');
            $table->integer('close')->default(0);
>>>>>>> 4900b5239fcd83105346cc0babab3df0bf430e1f
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forum_messages');
    }
}
