<?php

//クラスの住所(Postcontroller.phpはApp\Http\controllersフォルダの中にあることを示している)
namespace App\Http\Controllers;

//このファイルではこのクラスを使いますと宣言すること
//このファイルはilluminate\Httpフォルダの中にあるRequestクラスを使うよということを示しています。(宣言しておくとrequestと記述するだけでRequestクラスを呼び出せる)

use Illuminate\Http\Request;

//Controllerというクラスを継承　（このクラスの中に各種アクション(メソッド)を作成する
//class 子クラス extends　親クラス
class PostController extends Controller
{
    //一覧ページ
    public function index(){
        //viewヘルパー 表示したいビューを引数として指定する。かき方は フォルダ名.ファイル名 resource/viewフォルダを基準とする
        return view('posts.index');
    }
}
