<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;



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
                ->withErrors($validator)->withInput();
//                ->withInput(Input::except('link'))
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
//        return view('posts.edit',compact('post'));
        //
//        return View::make('posts.edit', ['post' => $post]);
// show the view and pass the shark to it
        return View::make('posts.edit')
            ->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Post $post)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required',
            'link'      => 'required',
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {

            return Redirect::to('posts/' . $post->id . '/edit')
                ->withErrors($validator)
                ->withInput($request->except(['title', 'link']));
//                ->withInput(Input::except('password'));
        } else {
            // store
//            $shark = post::find($post);
            $post->title        = $request->title;
            $post->link         = $request->link;
            $post->description  = $request->description;
            $post->save();

            return Redirect::route('posts.show', $post)->with('success', '포스트 [' . $post->title . '] 가 성공적으로 수정되었습니다!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Contracts\View\View
     */
    public function destroy(Post $post)
    {
//        dd($post->title);
        $post->delete();
        return Redirect::route('posts.index')->with('success', '포스트 [' . $post->title . '] 가 성공적으로 삭제되었습니다!');
//        return redirect("/");
//        //
//        return View::make('posts.show')
//            ->with('post', $post);
    }
}
