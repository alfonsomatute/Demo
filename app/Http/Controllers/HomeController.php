<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
	public function index()
	{
		$banner = (object)[ 
			'image' => 'cabecera.jpeg',
			'title' => 'entre pinos y encinas',
			'subtitle' => 'aprendiendo de la tierra',
		];
		$posts = array();
		return view('themes.clean-blog.home',compact('posts','banner'));
	}
}

