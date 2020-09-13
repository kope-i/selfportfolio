<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataSet = [
            [
                'user_id' => 1,
                'title' => 'title1',
                'description' => 'description1',
                'category_mode' => 'works',
                'category_stage_id' => '1',
                'category_style_id' => '1'
            ],
            [
                'user_id' => 1,
                'title' => 'title2',
                'description' => 'description2',
                'category_mode' => 'works',
                'category_stage_id' => '2',
                'category_style_id' => '2'
            ],
            [
                'user_id' => 2,
                'title' => 'title_third',
                'description' => 'description_third',
                'category_mode' => 'inspired',
                'category_stage_id' => '3',
                'category_style_id' => '3'
            ],

        ];

        foreach ($dataSet as $data) {
            Post::create($data);
        }
    }
}
