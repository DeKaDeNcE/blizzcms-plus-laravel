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
            'blogs' => Blog::select('*')->orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the blog template.
     *
     * @return \Illuminate\Http\Response
     */
    public function blog($id = 0){
        
        $count = Blog::select('*')->where('id', $id)->count();

        if($id == 0 || $count == 0){ 
            return redirect('');
        } else {
            return Theme::view('blog', [
                'article' => Blog::select('*')->where('id', $id)->get(),
                'comments' => Comments::select('*')->where('id_news', $id)->get(),
                'list_post' => Blog::select('*')->orderBy('id', 'desc')->limit('5')->get(),
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