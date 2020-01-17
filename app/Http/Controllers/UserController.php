<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Blog;
use Comments;
use App\Quotation;
use Theme;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the online template.
     *
     * @return \Illuminate\Http\Response
    */
    public function settings()
    {
        return Theme::view('settings');
    }

}
