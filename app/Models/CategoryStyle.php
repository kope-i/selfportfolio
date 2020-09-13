<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryStyle extends Model
{
    use SoftDeletes;

    public function post()
    {
        return $this->hasMany('App\Models\post');  
    }

    public function getLists()
    {
        $category_styles = CategoryStyle::orderBy('id','asc')->pluck('name', 'id');
    
        return $category_styles;
    }
}
