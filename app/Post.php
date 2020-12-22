<?php

namespace App;

use Hidehalo\Nanoid\Client;
// use Hidehalo\Nanoid\GeneratorInterface;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::creating(function ($user) {
            $client = new Client();
            $shortId = $client->generateId($size = 21);
            $slug = Str::slug($user->title . Str::substr($shortId, 0, 4), '-');

            $user->short_id = $shortId;
            $user->slug = $slug;
        });
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function tags()
    {
        return $this->hasMany('App\PostTag');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function type()
    {
        return $this->belongsTo('App\PostType');
    }
}
