<?php

use App\Models\CategoryStyle;
use Illuminate\Database\Seeder;

class CategoryStylesTableSeeder extends Seeder
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
                'name' => '絵・イラスト',
            ],
            [
                'name' => '写真',
            ],
            [
                'name' => '動画・映画',
            ],
            [
                'name' => 'その他',
            ],
        ];

        foreach ($dataSet as $data) {
            CategoryStyle::create($data);
        }
    }
}
