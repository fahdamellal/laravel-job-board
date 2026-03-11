<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table="tag";
    //Les colonnes qui sont modifiable
    protected $fillable = ['title']; 

    //  les colonnes non modifiable
    protected $guarded=['id'] ;

    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    
}
