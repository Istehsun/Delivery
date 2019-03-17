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


      if ($comment::destroy($comment->id)){
        echo "Recored deleted Successfully";

        return back();
    }}
     
     public function edit(Comment $comment) {

         return view('articles.comment',compact('comment'));
    }

    public function update(Comment $comment) {

        $c = Comment::Where('id',$comment->id)
                           ->update([
                          'body'=>"tryry"
                        ]);

        return redirect('/index');

      }

    
}
