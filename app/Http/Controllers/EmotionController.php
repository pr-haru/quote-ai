<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Gemini\Laravel\Facades\Gemini;
//LaravelのHTTPクライアント機能を利用するためのインポート文
use Illuminate\Support\Facades\Http;

class EmotionController extends Controller{
public function index(Request $request) {
    //画面で入力したテキスト取得
    $ApiKey = getenv('GEMINI_API_KEY');
        $client = Gemini::client($ApiKey);
    $sentence = $request->input('text'); 
    $messege="この文章に寄り添った名言教えて{$sentence}";
    $result = $client->geminiPro()->generateContent($messege);    
    var_dump($result->text());
}

//viewからテキスト取得
//1.感情API処理に入れる。返す値は感情の数値出す
//数値によってカテゴリ分け
//カテゴリを格言APIに渡す
//返す
//view

}