<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Validator;

class EditMessageController extends Controller
{
    public function index($id){
        $message = Message::find($id);
        $oldData = $message->toArray();
//        dd($oldData);
        return view('admin.edit-content')->with(['title' => "Гостевая книга: редактирование записи",'oldData' => $oldData]);
    }
    public function updateData(Request $request, $id){
        $message = Message::find($id);
        $newData= $request->except('_token');
        $validator = Validator::make($newData,[
            'name' => 'required|max:100',
            'email' => 'required|email',
            'theme' => 'required|min:3|max:150',
            'text' => 'required|min:3'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $message->fill($newData)->update();
        return redirect()->route('edit-content',['id'=>$message->id])->with(['status'=>'Запись успешно обновлена']);
    }
}
