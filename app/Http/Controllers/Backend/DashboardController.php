<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackBaseController;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Comment;

class DashboardController extends BackBaseController
{
    public function home()
    {
        $userCount = User::count();
        $postCount = Post::count();
        $commentCount = Comment::count();

        return $this->renderView('dashboard')
                        ->with('user_count', $userCount)
                        ->with('post_count', $postCount)
                        ->with('comment_count', $commentCount);
    }
}
