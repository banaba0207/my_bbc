<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'contributor', 'body'];

//    public function getTitleAttribute($value){
//        return mb_strtoupper($value);
//    }

//    public function setFig_origAttribute($value)
//    {
//        $this->attributes['fig_name'] = 'dummy.';
//    }

    //published_at $B$GF|IU%_%e!<%F!<%?!<$r;H$&(B
//    protected $dates = ['published_at'];

    public function scopePublished($query){
        $query->where('updated_at', '<=', Carbon::now());
    }
}
