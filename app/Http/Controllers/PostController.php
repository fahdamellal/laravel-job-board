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
                'title'=> 'My Second Post',
                'body'=>"Post 2 Content",
                "author"=> "Yahya",
                "published"=> true
        ]);
        return redirect("/blog");
    }

    public function show ($id){
        $post=Post::findOrFail($id);
        return view("post.show",["post"=>$post,"pagetitle"=> $post->title]);


    }

    public function delete (){
        Post::destroy(1);
        return redirect("/blog");
    }

}
