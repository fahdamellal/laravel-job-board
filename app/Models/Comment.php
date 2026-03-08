<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="comment";
    protected $fillable=['author','body','post_id'];
    protected $guarded=['id'];


    public function post(){

       return $this->belongsTo(Post::class);
    }
}


// 1 post have many comments 