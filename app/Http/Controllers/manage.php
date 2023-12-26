<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manage extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function AddPost(Request $request){
        if( $request->isMethod('post')){
        $pos = new Post();
        $pos->title = $request->input('title');
        $pos->user_id=Auth::user()->id;
        $pos->posttext = $request->input('post');
        $pos->image=$request->input('image');
        $pos->save();
        return redirect('view');
        }
      
        return view('manage.addPost');
    }

    public function view(){
        $posts = Post::all();
        $pos= Array('posts=>$posts');
        return view('manage.view',$pos);
    }
    public  function  read(Request $request ,$id){
        if ($request->isMethod('post')){
            $pos= new Comment();
            $pos->comment=$request->input('body');
            $pos->post_id= $id;
            $pos->save();
            // return redirect("view");
        }

        $post=Post::find($id);
        $pos=Array('post'=>$post);
        return view("manage.read",$pos );
    }
}
