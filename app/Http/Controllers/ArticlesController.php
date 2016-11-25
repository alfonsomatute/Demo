<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Backpack\NewsCRUD\app\Models\Article;

class ArticlesController extends Controller
{
    public function article($id)
    {
    	$article = Article::find($id);

    	$banner = (object)[ 
			'image' => $article->image,
			'title' => $article->title,
			'subtitle' => '',
		];
		
		return view('themes.clean-blog.article',compact('article','banner'));
    }
}
