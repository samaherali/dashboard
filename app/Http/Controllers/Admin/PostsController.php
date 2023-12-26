<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('admin.posts')->with('posts',$posts);

    }

    public function deletepost($id){
        $posts = Post::findOrFail($id);
        $posts->delete();
        return redirect('/post-delete')->with('status','the post is delete');

    }
}
