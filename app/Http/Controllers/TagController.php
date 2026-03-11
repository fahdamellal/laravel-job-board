<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;

class TagController extends Controller
{
    public function index(){
        $tags=Tag::all();
        return view("tag.index",["tags"=>$tags,'pagetitle'=>'Tags']);
    }

    public function create (){
        Tag::create([
                'title'=> 'Tailwind'
        ]);
        return redirect("/Tags");
    }

    public function show ($id){
        $tag=Tag::findOrFail($id);
        return view("tag.show",["tag"=>$tag,"pagetitle"=> $tag->title]);


    }

    public function delete (){
        Tag::destroy(1);
        return redirect("/Tags");
    }

    public function test_Many(){
        $post3=Post::find(3);
        $post2=Post::find(2);
        $post3->tags()->attach([1,2]);
        $post2->tags()->attach([1]);
        return redirect("Tags");
    
    }
}
