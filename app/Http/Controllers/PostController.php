<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    
    
    public function index(){
        // simplePaginate
        $posts=Post::cursorPaginate(5);
        return view("post.index",["posts"=>$posts,'pagetitle'=>'Blog']);
    }

    public function create (){
        for($i= 0; $i< 100; $i++){
        $post=Post::create([
                'title'=> 'My Second Post',
                'body'=>"Post 2 Content",
                "author"=> "Yahya",
                "published"=> true
        ]);}
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
