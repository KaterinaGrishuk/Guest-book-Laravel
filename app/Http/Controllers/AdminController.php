<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.add-content')->with(['title' => 'Гостевая книга: добавление записи']);
    }
    public function getData(){

    }
}
