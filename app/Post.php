<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'content',
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function tags()
    {
        return $this->belongsToMany(App\Tag::class);
    }
}
