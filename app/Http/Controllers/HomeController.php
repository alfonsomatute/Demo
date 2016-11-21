<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
	public function index()
	{
		$banner = (object)[ 
			'image' => 'home-bg.jpg',
			'title' => 'Clean Blog',
			'subtitle' => 'A Clean Blog Theme by Start Bootstrap',
		];
		$posts = array();
		return view('themes.clean-blog.home',compact('posts','banner'));
	}
}

