<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{   use HasUuids;
    protected $table="post";
    protected $primarykey = "id";
    protected $typekey = "string";
    public $incremanting = false;
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