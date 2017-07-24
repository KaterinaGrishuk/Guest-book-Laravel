@extends('layouts.main')
@section('content')
    <h1>{{$title}}</h1>
    <hr>
    <div class="form_wrap">
        {{ Form::open(['files' => true]) }}
        <span>Имя*:</span>{{Form::text('name', null)}}<br>
        <span>Email*:</span>{{Form::text('email', null)}}<br>
        <span>Тема:</span>{{Form::text('theme', null)}}<br>
        <span>Сообщение*:</span>{{Form::textarea('message', null)}}<br>
        {{ Form::close() }}
        <button type="button" class="add pull-right btn btn-success">Добавить</button>

    </div>
@endsection
@section('css')
    @parent
@endsection