<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * Seed Database for folowing application modules :
     * * > User module / table(s) : Users
     * > "Comite de soutiens" module / table(s) : comite_soutiens
     * > Forum module / table(s) : forum_topics, forum_messages, forum_categories
     * > Participants module / table(s) : participants
     * > news module / table(s) : news
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ComiteSoutiensTableSeeder::class);
        $this->call(ParticipantsTableSeeder::class);
        $this->call(ForumCategoriesTablesSeeder::class);
        $this->call(ForumTopicsTablesSeeder::class);
        $this->call(ForumMessagesTablesSeeder::class);
        $this->call(NewsTableSeeder::class);
    }
}
