<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\PostSuggest;

class Comment extends Model
{
    use SoftDeletes;

    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
    ];

    public function post()
    {
        return $this->belongsTo('App\Post');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    // public function postSuggest()
    // {
    //     // return $this->hasOne('App\PostSuggest', ['post_id', 'user_id'], ['post_id', 'user_id']);
    //     return $this->hasOne('App\PostSuggest')
    //                     ->where('post_id', $this->post_id)
    //                     ->where('user_id', $this->user_id);
    //     // dd($this->user_id);
    //     // return PostSuggest::where('post_id', $this->post_id)
    //     //                         ->where('user_id', $this->user_id)
    //     //                         ->first();
    // }

}
