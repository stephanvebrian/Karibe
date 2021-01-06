<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\BackBaseController;
use Illuminate\Http\Request;
use App\Comment;

class CommentController extends BackBaseController
{
    public function index()
    {
        $comments = Comment::all();
        return $this->renderView('comment.index')
                        ->with('comments', $comments);
    }
}
