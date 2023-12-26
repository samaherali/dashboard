<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
   /* public function addpost(Request $request){
        $posts = new Post;
        $posts->title = $request->input('title');
        $posts->posttext = $request->input('post');
        $posts->image=$request->input('image');
        if($image){
            $imagename=time().'.'.$image->getClientOrginalExtension();
            $request->image->move('postimage', $imagename);
            $post->image= $imagename;  
        }
        $posts->save();
        return redirect('/user-post')->with('status','data add for post');
        }*/
}
