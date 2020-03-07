<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = DB::table('users')->first();
        $news_data[0] = [
            'subject' => 'Sujet 1',
            'image' => 'ledev.jpg',
            'auteur' => $admin->name,
            'content' => 'Contenu news 1',
            'created_at' => now()
        ];
        $news_data[1] = [
                'subject' => 'Sujet 2',
                'image' => 'ledev.jpg',
                'auteur' => $admin->name,
                'content' => 'Contenu news 2',
                'created_at' => now()
        ];
        if ( empty( DB::table('news')->count() ) ){
            DB::table("news")->insert($news_data);
        }
    }
}
