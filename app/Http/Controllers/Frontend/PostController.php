<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){}

    /**
     * Display create pizza page
     * @method GET
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->renderView('pizza.create');
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

        return $this->renderView('pizza.show')
                                        ->with('post', $post);
    }



}
