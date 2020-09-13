<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryStage extends Model
{
    use SoftDeletes;

    public function post()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function getLists()
    {
        $category_stages = CategoryStage::orderBy('id', 'asc')->pluck('name', 'id');

        return $category_stages;
    }
}
