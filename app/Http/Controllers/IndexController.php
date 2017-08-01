<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class IndexController extends Controller
{
    public function index(){
        $messages = Message::latest()->with('user')->paginate(3);
        $count = Message::count();

        return view('home.home')->with([
            'title'=>"Гостевая книга",
            'messages'=>$messages,
            'count'=>$count
        ]);
    }
    public function delete(Request $request){
        $currentId = $request->id;
        $message= Message::find($currentId);
        if($message->delete()){
            $allMessage=Message::all();
            foreach ($allMessage as $k=>$message){
                $message->number = $k+1;
                $message->save();
            }
            return redirect()->route('index-home')->with(['status'=>'Запись удалена']);
        };
    }
}
