<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'body', 'published_at'];

//    public function getTitleAttribute($value){
//        return mb_strtoupper($value);
//    }

//    public function setBodyAttribute($value)
//    {
//        $this->attributes['title'] = mb_strtolower($value);
//    }

    //published_at $B$GF|IU%_%e!<%F!<%?!<$r;H$&(B
    protected $dates = ['published_at'];

    public function scopePublished($query){
        $query->where('published_at', '<=', Carbon::now());
    }
}
