<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class ArticleController extends Controller
{

    public function index() {

    	$articles = Article::all();

         return view('articles.article',compact('articles'));
	}

	public function create() {

             return view('articles.create');
	}

	public function store() {

         $this->validate(request(),[

        
        'body'    => 'required',
        'created_at'    => 'required'
                ]);
  

    	Article::create([
        'title'   => request('title'),
        'body'    => request('body')
         ]);

        return redirect('/index');
	
	}

	public function show(Article $id) {

             return view('articles.show',compact('id'));
	}


}
