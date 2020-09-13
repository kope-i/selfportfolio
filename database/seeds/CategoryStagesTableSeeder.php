<?php

use App\Models\CategoryStage;
use Illuminate\Database\Seeder;

class CategoryStagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataset = [
            [
                'name' => '思いつき',
            ],
            [
                'name' => '制作途中',
            ],
            [
                'name' => '完成品',
            ],
        ];

        foreach ($dataset as $data) {
            CategoryStage::create($data);
        }
    }
}
