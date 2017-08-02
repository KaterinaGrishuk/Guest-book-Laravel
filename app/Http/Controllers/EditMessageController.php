<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Gate;

class EditMessageController extends Controller
{
    public function index($id){
        $message = Message::find($id);
        $oldData = $message->toArray();
        $user = Auth::user();
        return view('admin.edit-content')->with(['title' => "Гостевая книга: редактирование записи",
                                                        'message'=>$message,
                                                        'oldData' => $oldData,
                                                        'user'=>$user]);
    }
    public function updateData(Request $request, $id){
        $message = Message::find($id);
        $user = Auth::user();
//        if(Gate::denies('edit-content', $message)){
//            return redirect()->back()->with(['status'=>'У вас нет прав']);
//        }
        if($user->cannot('edit',$message)){
            return redirect()->back()->with(['noAccess'=>'У вас нет прав на редактирование данной записи']);
        }

        $newData= $request->except('_token');
        $validator = Validator::make($newData,[
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
