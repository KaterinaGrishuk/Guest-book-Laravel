<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class HomeController extends Controller
{

    public function index(){
        $messages = Message::latest()->paginate(3);
//        dd($messages);
        $count = Message::count();

        return view('home.home')->with([
            'title'=>"Гостевая книга",
            'messages'=>$messages,
            'count'=>$count
        ]);
    }
}
