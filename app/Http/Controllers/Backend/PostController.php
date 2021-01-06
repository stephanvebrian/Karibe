<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackBaseController;
use Illuminate\Http\Request;
use App\Post;

class PostController extends BackBaseController
{
    public function index()
    {
        $posts = Post::all();
        return $this->renderView('post.index')
                        ->with('posts', $posts);
    }
}
