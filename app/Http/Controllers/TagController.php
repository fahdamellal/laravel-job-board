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
        $post3=Post::find('019cdf68-848a-73b8-b34e-ca437ab978c7');
        $post3->tags()->attach(['019cdf73-8c35-728f-bdfe-35bf324b00f3','019cdf73-affc-70ed-98b8-aa09973fc3b2']);
        return redirect("Tags");
    
    }
}
