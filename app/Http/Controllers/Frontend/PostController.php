<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontBaseController;
use Illuminate\Http\Request;
use App\Post;

class PostController extends FrontBaseController
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){}

    /**
     * Display create post page
     * @method GET
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->renderView('post.create');
    }

    /**
     * store post page
     * @method GET
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate pizza input
        $request->validate([
            'comment' => 'required|string',
            'suggest'=> 'required',
            // 'gander'=> 'required|in:male,female',
        ]);
        
        

        return $this->renderView('post.create');
    }
    
    /**
     * show specified post by slug
     * @method GET
     * 
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();

        return $this->renderView('post.show')
                                        ->with('post', $post);
    }



}
