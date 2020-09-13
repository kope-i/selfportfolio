<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','description','category_mode','category_stage_id','category_style_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category_stage()
    {
        return $this->belongsTo('App\Models\CategoryStage');
    }

    public function category_style()
    {
        return $this->belongsTo('App\Models\CategoryStyle');
    }
}
