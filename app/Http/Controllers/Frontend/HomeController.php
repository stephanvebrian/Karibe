<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\FrontBaseController;
use Illuminate\Http\Request;
use App\Traits\Controllers\FrontendControllerMethod; 
use App\Post;
use Carbon\Carbon;

class HomeController extends FrontBaseController
{
    // use FrontendControllerMethod;

    public function home()
    {
        // $hotPostWeek = Post::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
        //                             ->orderBy('view_count', 'desc')
        //                             ->take(2)
        //                             ->get();

        $posts = Post::orderBy('created_at', 'desc')->paginate(8);

        // return view('fe.home');
        return $this->renderView('home')
                        // ->with('hotPost', $hotPostWeek)
                        ->with('posts', $posts);
    }
    
}
