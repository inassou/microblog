<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{


protected $fillable = ['title', 'name' , 'slug', 'theme' , 'nb_comments', 'content'];

}
