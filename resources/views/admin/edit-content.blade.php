@extends('layouts.main')
@section('content')
    <div class="add_content">
        @if(session('status'))
            <div class="alert alert-success">{{ session('status') }} <i style="font-size: 16px; margin: 0 6px;" class="fa fa-caret-right" aria-hidden="true"></i>
            <a style="font-size: 19px; color: #2b542c;" href="{{route('index-home')}}">на главную</a>
            </div>
        @endif

        <div class="form_wrap">

            {{ Form::open(['files' => true]) }}
            <span>Тема*:</span>{{Form::text('theme', $oldData['theme'])}}<br>
            @if($errors->has('theme'))
                <span class="alert alert-danger">{{ $errors->first('theme') }}</span><br>
            @endif
            <span>Сообщение*:</span>{{Form::textarea('text', $oldData['text'])}}<br>
            @if($errors->has('text'))
                <span class="alert alert-danger">{{ $errors->first('text') }}</span><br>
            @endif
            <button type="submit" class="add pull-right btn btn-success">Редактировать</button>
            {{ Form::close() }}

            <a href="{{route('index-home')}}"><button style="margin-right: 5px;" type="button" class="add pull-right btn btn-danger">Отмена</button></a>
        </div>
    </div>
@endsection
@section('css')
    @parent
@endsection