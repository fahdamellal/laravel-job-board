<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   
    protected $table="post";
    //Les colonnes qui sont modifiable
    protected $fillable = ['title','author','body','published']; 

    //  les colonnes non modifiable
    protected $guarded=['id'] ;

    public function comments(){

       return $this->hasMany(Comment::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}


// 1 post have many comments 