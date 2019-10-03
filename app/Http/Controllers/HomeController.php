<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Blog;
use Comments;
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
        return Theme::view('home', 
        [
            'blogs' => Blog::getNews()
        ]);
    }

    /**
     * Show the blog template.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog($id = 0){
        
        $count = Blog::getCountNews($id);

        if($id == 0 || $count == 0){ 
            return redirect('');
        } else {
            return Theme::view('blog', [
                'idlink' => $id,
            ]);
        }
    }

    /**
     * Show the update template.
     *
     * @return \Illuminate\Http\Response
    */
    public function update()
    {
        return Theme::view('update'); // NOT IMPLEMENTED AT THE MOMENT
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