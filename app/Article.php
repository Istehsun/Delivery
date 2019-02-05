<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Comment;

class Article extends Model
{    

	protected $fillable =['title','body'];

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}

