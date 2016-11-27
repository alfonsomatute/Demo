<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Backpack\NewsCRUD\app\Models\Article;
use Backpack\NewsCRUD\app\Models\Category;

class HomeController extends Controller
{
	public function index()
	{
		$banner = (object)[ 
			'image' => '/clean-blog/img/cabecera.jpeg',
			'title' => 'entre pinos y encinas',
			'subtitle' => 'aprendiendo de la tierra',
		];
		$articles = Article::orderBy('date','desc')->paginate(15);
		return view('themes.clean-blog.home',compact('articles','banner'));
	}

	public function contact()
	{
		echo json_encode(array('result'=>'ok'));
	}
}

