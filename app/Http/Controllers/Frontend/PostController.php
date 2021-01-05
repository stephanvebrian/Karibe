<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Suggest;

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
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'suggest'=> 'required|array|min:1',
            'suggest.*'=> 'required|string|distinct|min:3',
        ]);

        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->type_id = 1;
        $post->title = $request->title;
        $post->body = $request->description;
        $post->save();
        
        // dd($request->suggest);
        foreach($request->suggest as $idx => $suggest) {
            $sug = new Suggest();
            $sug->post_id = $post->id;
            $sug->value = $idx;
            $sug->text = $suggest;
            $sug->save();
        }
        
        // return $this->renderView('post.create');
        return redirect(route('fe.home'));
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
