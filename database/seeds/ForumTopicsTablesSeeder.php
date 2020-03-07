<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ForumTopicsTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seeding des Topics
        $admin_id = DB::table('users')->select('id')->first()->id;
        $forum_categries_rows = DB::table("forum_categories")->get();
        $forum_topics_data[0] = [
            'name' => "Topic 1",
            'content' => "Description Topic 1 ",
            'user_id' => $admin_id,
            "forum_category_id" => $forum_categries_rows[0]->id,
            'created_at' => now(),
        ];
        $forum_topics_data[1] = [
            'name' => "Topic 2",
            'content' => "Description Topic 2 ",
            'user_id' => $admin_id,
            "forum_category_id" => $forum_categries_rows[1]->id,
            'created_at' => now(),
        ];
        foreach ($forum_topics_data as $topics_datum) {
            $topics_count = DB::table('forum_topics')->where('name',$topics_datum['name'])->count();
            if ( empty($topics_count) ){
                DB::table('forum_topics')->insert($topics_datum);
            }
        }
    }
}
