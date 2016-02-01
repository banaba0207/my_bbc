<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{   
    // @var string
    protected $table = 'articles';

    //@var array
    protected $fillable = ['title', 'body'];
}
