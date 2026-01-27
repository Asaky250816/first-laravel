<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
/*   public function index($text = "デフォルト")
    //public function index(Request $request)
    {
        $item = [
            'content' => 'パラメータを渡す',
            'param' => $text
            'param' => $request->text
        ];
        return  view('index', $item);
    }
*/
    public function index()
    {
        $item = [
            'content' => '本文'
        ];
        return view('index', $item);
    }
}