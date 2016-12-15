<?php

namespace App;

use Illuminate\Database\Eloquent\Model;



class Post extends Model
{

protected $fillable = ['title', 'name' , 'slug', 'theme' , 'nb_comments', 'content', 'created_at', 'updated_at'];
    public function comments()
    {
        return $this->hasMany('App\Comments','on_post');
    }


    public function author()
    {
        return $this->belongsTo('App\User','name_id');
    }


    public $timestamps = true;



}
