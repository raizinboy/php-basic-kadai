<?php

//Routeクラスを使うことを宣言
use Illuminate\Support\Facades\Route;

//ルーティングを設定するコントローラを宣言する(PostContollerクラスを使うことを宣言する)
use App\Http\Controllers\PostController;

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
    return view('welcome');
});

//投稿一覧のページ　
//Route::HTTPリクエストメソッド名('相対URL', [コントローラ名::class, 'アクション名']);
//リクエストメソッド(GET, POST, PUT/PATCH, DELETE)
//->name()でルートに名前を付けられる
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
