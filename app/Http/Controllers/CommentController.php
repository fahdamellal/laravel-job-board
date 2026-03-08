<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
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
        return redirect("/comment");}

    public function show ($id){
        $comment=Comment::findOrFail($id);
        return view("comment.show",["comment"=>$comment,"pagetitle"=>'Comment Id']);


    }

}
