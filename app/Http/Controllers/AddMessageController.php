<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use App\Message;

class AddMessageController extends Controller
{
    public function index(){
        return view('admin.add-content')->with(['title' => 'Гостевая книга: добавление записи']);
    }
    public function getData(Request $request){
        $data=$request->except(['_token']);
        $validator = Validator::make($data, [
            'name' => 'required|max:100',
            'email' => 'required|email',
            'theme' => 'required|min:3|max:150',
            'text' => 'required|min:3'
        ]);
        if ($validator->fails()){
//            dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $lastValue = DB::table('messages')->max('number');
        $data['number']=(int)$lastValue + 1;
        $message = new Message();
        $message->fill($data);
        return redirect('admin/add-content')->with(['status'=>'Запись успешно добавлена']);
    }
}
