<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasUuids;

    protected $primarykey = "id";
    protected $typekey = "string";
    public $incremanting = false;
    protected $table="tag";
    //Les colonnes qui sont modifiable
    protected $fillable = ['title']; 

    //  les colonnes non modifiable
    protected $guarded=['id'] ;

    public function posts(){
        return $this->belongsToMany(Post::class);
    }

    
}
