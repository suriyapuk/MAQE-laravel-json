<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class HomeController extends Controller
{
    public function home()
    {
    	$jsonurl = "http://maqe.github.io/json/posts.json";
		$json = file_get_contents($jsonurl);
		$posts = json_decode($json);

		$jsonurl = "http://maqe.github.io/json/authors.json";
		$json = file_get_contents($jsonurl);
		$authors = json_decode($json);
		
		return View::make('home', compact('posts'), compact('authors'));
    }
}
