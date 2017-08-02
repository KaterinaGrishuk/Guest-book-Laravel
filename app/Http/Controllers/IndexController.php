<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;
use App\Message;
use Auth;
use Gate;

class IndexController extends Controller
{
    public function index(){
        $messages = Message::latest()->with('user')->paginate(3);
        $count = Message::count();
        $user=Auth::user();

        return view('home.home')->with([
            'user'=>$user,
            'title'=>"Гостевая книга",
            'messages'=>$messages,
            'count'=>$count
        ]);
    }
    public function delete(Request $request){
        $currentId = $request->id;
        $message= Message::find($currentId);
//        if(Gate::denies('delete-content')){
//            return redirect()->back()->with(['status'=>'У вас нет прав на удаление записи']);
//        }
        if($request->user()->cannot('delete', $message)){
            return redirect()->back()->with(['status'=>'У вас нет прав на удаление записи']);
        }
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
