<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumMessagesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Seeding des Messages
        $admin_id = DB::table('users')->select('id')->first()->id;
        $forum_message_data = [];
        $forum_topics_rows = DB::table("forum_topics")->get();
        $forum_message_data[0] = [
            'content' => "Contenue message  1",
            'user_id' => $admin_id,
            'topic_id' => $forum_topics_rows[0]->id,
            'created_at' => now(),
            'author_type' =>  'admin'
        ];
        $forum_message_data[1]  = [
            'content' => "Contenue message  2",
            'user_id' => $admin_id,
            'topic_id' => $forum_topics_rows[1]->id,
            'created_at' => now(),
            'author_type' =>  'admin'
        ];
        foreach ($forum_message_data as $forum_message_datum) {
            $message_count =  DB::table('forum_messages')->count();
            if ( $message_count < 4 ){
                DB::table('forum_messages')->insert($forum_message_datum);
            }
        }



    }


}
