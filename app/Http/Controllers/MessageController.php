<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function result($operator)
    {
        switch ($operator) {
            case 'morning':
                $answer = "朝のあいさつ";
                $answer2 = "おはようございます";
                break;
            case 'afternoon':
                $answer = "昼のあいさつ";
                $answer2 = "こんにちは";
                break;
            case 'evening':
                $answer = "夕方のあいさつ";
                $answer2 = "こんばんは";
                break;
            case 'night':
                $answer = "夜のあいさつ";
                $answer2 = "おやすみなさい";
                break;
            case 'random':
                $answer = "ランダムなメッセージ";
                $greet = array('おはようございます', 'こんにちは', 'こんばんは', 'おやすみなさい');
                $rand_key = array_rand($greet);
                $answer2 = $greet[$rand_key];
                break;
        };
        return view('message.greeting', ['answer' => $answer, 'answer2' => $answer2]);
    }
    public function freeword($answer2)
    {
        $answer = "自由なメッセージ";
        return view('message.greeting', ['answer' => $answer, 'answer2' => $answer2]);
    }
}
