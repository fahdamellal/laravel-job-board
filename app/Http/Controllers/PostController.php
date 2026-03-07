<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        $posts=Post::all();
        return view("post.index",["posts"=>$posts,'pagetitle'=>'Blog']);
    }

    public function create (){
        $post=Post::create([
                'title'=> 'My first content',
                'body'=>"This is my content",
                "author"=> "Yahya",
                "published"=> true
        ]);
        return redirect("/blog");
    }

    public function show ($id){
        $post=Post::findOrFail($id);
        return view("post.show",["post"=>$post,"pagetitle"=> $post->title]);


    }

}
