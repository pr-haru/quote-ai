<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sendMessage(Request $request)
    {
        $message = $request->input('message');
        if (isset($message) && $message !== '') {
            $messages = [
                ['role' => 'system', 'content' => '{$message}の感情にあった名言だけを教えて。名言と著者名を以下の形式で出力してください。「名言」- 著者名'],
                ['role' => 'user', 'content' => $message],
            ];

            $result = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => $messages,
            ]);


            $response = $result->choices[0]->message->content;
            return view('index', ['quote' => $response]);
        } else {
            return view('index', ['quote' => '']);
        }
    }
}
