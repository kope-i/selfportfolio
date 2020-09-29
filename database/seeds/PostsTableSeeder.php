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
                'title' => '夜空',
                'description' => '思いつきで書いた夜空',
                'category_mode' => 'works',
                'category_stage_id' => '1',
                'category_style_id' => '1',
                'image' => 'images/74ACAE4A-AB1D-4E6D-BC62-AA5101005BD2.JPG'
            ],
            [
                'user_id' => 1,
                'title' => '「Mommy」',
                'description' => '昨日渋谷のシネクイントで鑑賞...',
                'category_mode' => 'inspired',
                'category_stage_id' => '3',
                'category_style_id' => '3',
                'image' => 'images/2020080310012425733.jpg'
            ],
            [
                'user_id' => 2,
                'title' => '生物の「死」',
                'description' => 'DamienHirst....',
                'category_mode' => 'inspired',
                'category_stage_id' => '3',
                'category_style_id' => '1',
                'image' => 'images/damienhirstimg.jpg'
            ],

        ];

        foreach ($dataSet as $data) {
            Post::create($data);
        }
    }
}
