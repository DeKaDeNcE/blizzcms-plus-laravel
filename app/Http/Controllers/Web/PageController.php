<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Theme;

class PageController extends Controller
{
    
    public function blog(){
    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
    	return view('news', compact('posts'));
    }

}