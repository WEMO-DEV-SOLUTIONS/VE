<?php

use Illuminate\Database\Seeder;

class ForumCategoriesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seeding des categories
        $forum_categories_data = [
            ['name' => 'Forum1',
                'description' => "Description Forum1",
                'created_at' => now(),
            ],
            [ 'name' => 'Forum2',
                'description' => "Description Forum2",
                'created_at' => now(),
            ],
        ];

        foreach ($forum_categories_data as $datum) {
            $existing_rows = DB::table('forum_categories')->Where('name', $datum['name'])->count();
            if (empty($existing_rows)) {
                DB::table('forum_categories')->insert($datum);
            }
        }

    }


}
