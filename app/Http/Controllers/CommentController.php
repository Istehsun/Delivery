<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Article;
use App\User;

class CommentController extends Controller
{
    public function store(Article $article) {


         $this->validate(request(),[

        
        'body'    => 'required'
                ]);

    	Comment::create([
    	'user_id'    => auth()->user()->id,	
    	'article_id' => $article->id,
        'body'       => request('body')
         ]);

        return back();
	}
    public function destroy(Comment $comment) {

       $s= $comment::find($comment->id);

      if ($s->delete()){
        echo "Recored deleted Successfully";

        return back();
    }
      

    }
}
