@extends('layouts.main')
@section('content')
    <div class="add_content">
    <h1>{{$title}}</h1>
    <hr>
        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }} <i style="font-size: 16px; margin: 0 6px;" class="fa fa-caret-right" aria-hidden="true"></i>
                <a style="font-size: 19px; color: #2b542c;" href="{{route('home')}}">на главную</a>
            </div>
        @endif

    <div class="form_wrap">

        {{ Form::open(['files' => true]) }}
        <span>Имя*:</span>{{Form::text('name', old('name'))}}<br>
        @if($errors->has('name'))
            <span class="alert alert-danger">{{ $errors->first('name') }}</span><br>
        @endif
        <span>Email*:</span>{{Form::text('email', old('email'))}}<br>
        @if($errors->has('email'))
            <span class="alert alert-danger">{{ $errors->first('email') }}</span><br>
        @endif
        <span>Тема*:</span>{{Form::text('theme', old('theme'))}}<br>
        @if($errors->has('theme'))
            <span class="alert alert-danger">{{ $errors->first('theme') }}</span><br>
        @endif
        <span>Сообщение*:</span>{{Form::textarea('text', old('text'))}}<br>
        @if($errors->has('text'))
            <span class="alert alert-danger">{{ $errors->first('text') }}</span><br>
        @endif
        <button type="submit" class="add pull-right btn btn-success">Добавить</button>
        {{ Form::close() }}
        <a href="{{route('home')}}"><button style="margin-right: 5px;" type="button" class="add pull-right btn btn-danger">Отмена</button></a>

    </div>
    </div>
@endsection
@section('css')
    @parent
@endsection