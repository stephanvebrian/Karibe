<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostSuggest extends Model
{
    use SoftDeletes;

    protected $table = 'post_suggest';
}
