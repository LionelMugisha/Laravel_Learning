<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    // protected $guarded = ['id']; 
    // protected $fillable = ['title','slug', 'excerpt', 'body']; 
    protected $guarded = [];    //we are in control

    // public function getRouteKeyName()   //return the name of the key and find the posts according to it.   {
    // {    
    //     return 'slug';
    // }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
