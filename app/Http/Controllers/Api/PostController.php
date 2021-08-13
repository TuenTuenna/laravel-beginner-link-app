<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * 포스팅 목록 가져오기
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
//        $allPosts = Post::all();
        $allPosts = Post::paginate(10);
//        return new PostCollection($allPosts);
        $filteredPosts = PostResource::collection($allPosts);
        return $filteredPosts;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //
        $userInputData = $request->all();

        $newPost = Post::create($userInputData);

        return new PostResource($newPost);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        if(Post::where('id', $id)->exists()) {
            $fetchedPost = Post::find($id);
            return new PostResource($fetchedPost);
        } else {
            return response()->json([
                "message" => "해당 포스트를 찾을 수가 없습니다."
            ], Response::HTTP_NOT_FOUND);
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    // 기존 데이터를 수정해서 -> 수정된 데이터를 반환
    public function update(PostRequest $request, $id)
    {
//        dd("update() called");
        if(Post::where('id', $id)->exists()) {
            $fetchedPost = Post::find($id);
            $fetchedPost->update($request->all());

            return new PostResource($fetchedPost);

        } else {
            return response()->json([
                "message" => "해당 포스트를 찾을 수가 없습니다."
            ], Response::HTTP_NOT_FOUND);
        }
//        $fetchedPost = Post::find($id);
//        dd($fetchedPost->title);
//        $fetchedPost->update($request->all());
//
//        return new PostResource($fetchedPost);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        if(Post::where('id', $id)->exists()) {
            $post = Post::find($id);
            $post->delete();

            return response()->json([
                "message" => "포스트가 삭제되었습니다."
            ], Response::HTTP_NO_CONTENT);
        } else {
            return response()->json([
                "message" => "해당 포스트를 찾을 수가 없습니다."
            ], Response::HTTP_NOT_FOUND);
        }
//        $fetchedPost = Post::find($id);
//        dd($post->title);
//        $post->delete();
//        Post::destroy($id);
//        return response()->json(array('success' => true), Response::HTTP_OK);
//        return response()->json(array('success' => true), 200);
//        return response()->json(null, Response::HTTP_NO_CONTENT);
//        return response(null, Response::HTTP_NO_CONTENT);
    }
}
