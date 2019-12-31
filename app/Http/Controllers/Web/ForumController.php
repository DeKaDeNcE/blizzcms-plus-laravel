<?php
namespace App\Http\Controllers;

// use App\Forum;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Theme;

class ForumController extends Controller
{
    
    public function index(){
        
    }
    
    /**
     * Show the categor.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return Theme::view('user.profile', ['user' => User::findOrFail($id)]);
    }

}