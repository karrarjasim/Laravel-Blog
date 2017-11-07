<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
protected $fillable=[
    'title','body'
];

public function commetns(){
    return $this->hasMany(Comment::class);
}

public function category(){
    return $this->belongsTo(Category::class);
}

}
