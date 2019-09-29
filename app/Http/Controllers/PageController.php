<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Quotation;
use Theme;

class PageController extends Controller
{
    
    public function blog($id){
    	$posts = DB::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->where('id', $id);
    	return view('news', compact('posts'));
    }

}