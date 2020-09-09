<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title','description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
