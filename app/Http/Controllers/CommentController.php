<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function index(){
        $comments=Comment::all();
        return view("comment.index",["comments"=>$comments,'pagetitle'=>'Comment']);
    }

    public function create ($post_id){
        $comment=Comment::create([
                "author"=> "Yahya",  
                "body"=>"3 comment",
                "post_id"=>$post_id
        ]);        
        return redirect("/commentt/$post_id");}

        public function post_comment($post_id){
            $post=Post::find($post_id)->comments;
            return view("comment.post",["comments"=>$post,"pagetitle"=>'Comment Post']);
        }
    public function show ($id){
        $comment=Comment::findOrFail($id);
        return view("comment.show",["comment"=>$comment,"pagetitle"=>'Comment Id']);
    }

}
