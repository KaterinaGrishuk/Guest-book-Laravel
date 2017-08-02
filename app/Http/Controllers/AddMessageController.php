<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Message;
use Gate;
use Auth;

class AddMessageController extends Controller
{
    public function index(){
        $user=Auth::user();
        return view('admin.add-content')->with(['title' => 'Гостевая книга: добавление записи',
                                                        'user'=>$user]);
    }
    public function getData(Request $request){
        if(Gate::denies('add-content')){
            return redirect()->back()->with(['status'=>'У вас нет прав']);
        }
        $user = Auth::user();
        $data=$request->except(['_token']);

        $validator = Validator::make($data, [
            'theme' => 'required|min:3|max:150',
            'text' => 'required|min:3'
        ]);
        if ($validator->fails()){
//            dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $lastValue = DB::table('messages')->max('number');
        $data['number']=(int)$lastValue + 1;
        $data['user_id']= $user->id;
        $message = new Message();
        $message->fill($data)->save();
        return redirect('admin/add-content')->with(['status'=>'Запись успешно добавлена']);
    }
}
