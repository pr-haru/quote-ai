<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;
//LaravelのHTTPクライアント機能を利用するためのインポート文
use Illuminate\Support\Facades\Http;

class EmotionController extends Controller{
public function index(Request $request) {
    //画面で入力したテキスト取得
    $sentence = $request->input('text');     

}

//viewからテキスト取得
//1.感情API処理に入れる。返す値は感情の数値出す
//数値によってカテゴリ分け
//カテゴリを格言APIに渡す
//返す
//view

}