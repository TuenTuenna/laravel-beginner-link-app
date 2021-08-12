<?php

use App\Models\Comment;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    return view('posts');
    return redirect('posts');
});

Route::get('/blade-component-test', function () {
//    return view('posts');
    return view('blade-component');
});

Route::get('/comments/{comment}/edit', function(\App\Models\Comment $comment) {
    return view('comments.edit', ['comment' => $comment]);
});

Route::patch('/comments/{comment}', function(Comment $comment) {
    $comment->update(
        request()->validate(['body' => 'required|string'])
    );
    return redirect("/comments/{$comment->id}/edit");
});

Route::delete('/comments/{comment}', function(Comment $comment) {
    // 삭제 인증
    $comment->delete();
    return redirect("/");
});

//Route::view('/posts', 'posts')->name('posts');
//
//Route::get('/user/profile', function () {
//    //
//})->name('profile');

Route::resource('posts', \App\Http\Controllers\PostController::class);


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');




//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
