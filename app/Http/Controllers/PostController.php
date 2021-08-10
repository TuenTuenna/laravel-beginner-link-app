<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {


        $posts = Post::orderBy('id', 'desc')->paginate(8);
//        $posts = Post::paginate(8);

        // load the view and pass the sharks
        return View::make('posts.index')
            ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        // load the create form (app/views/sharks/create.blade.php)
//        dd('create()');
        return View::make('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title' => 'required',
            'link'  => 'required'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('posts/create')
                ->withErrors($validator)
//                ->withInput(Input::except('link'))
                ;
        } else {
            // store
            $post = new Post;
            $post->title       = $request->title;
            $post->description = $request->description;
            $post->link        = $request->link;
            $post->save();

            return Redirect::route('posts.show', $post)->with('success', '포스트 [' . $request->title . '] 가 성공적으로 작성되었습니다!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Post $post)
    {
        // show the view and pass the shark to it
        return View::make('posts.show')
            ->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Post $post)
    {
        //
        return View::make('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
