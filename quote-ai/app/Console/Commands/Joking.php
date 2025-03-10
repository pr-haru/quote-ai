<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\Command;

// class Joking extends Command
// {
//     /**
//      * The name and signature of the console command.
//      *
//      * @var string
//      */
//     protected $signature = 'app:joking';

//     /**
//      * The console command description.
//      *
//      * @var string
//      */
//     protected $description = 'Command description';

//     /**
//      * Execute the console command.
//      */
//     public function handle()
//     {
//         $response = Http::get('https://icanhazdadjoke.com/', [
//             'headers' => [
//                 'lang' => 'ja', 
//                 'Accept' => 'application/json'
//             ]
//         ]);
//         $joke = $response->json()['joke'];
//         return view('index',['joke'=>$joke]);
//     }
// }
