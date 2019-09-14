<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Quotation;
use Theme;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the home template.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = DB::table('news')->get();

        return Theme::view('home', array(
            "blogs"  =>  $blog
        ));
    }

    
    /**
     * Show the online template.
     *
     * @return \Illuminate\Http\Response
    */
    public function online()
    {
        return Theme::view('online'); // NOT IMPLEMENTED AT THE MOMENT
    }

}