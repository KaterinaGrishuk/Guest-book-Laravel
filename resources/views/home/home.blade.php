@extends('layouts.main')
@section('content')
    <h1>{{$title}}</h1>
    <hr>
    <div class="container">
        <div class="content_wrap">
            <a href="{{route('add-content')}}"><button type="button" class="add btn btn-success">Добавить запись   <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            </a>
        <div class="amount">Количество записей <span class="label label-default">{{$count}}</span></div>
            @if(session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            @foreach($messages as $message)
        <div class="messages">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <span>Пользователь: {{$message->user->name}}</span>
                        <span class="pull-right time">{{$message->created_at}}</span>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="theme">Тема: {{$message->theme}}</div>
                    <hr>
                    <div class="text">{{$message->text}}</div>
                    <div class="pull-right">
                        <div class="butt">
                            <a href="{{route('edit-content',['id'=>$message->id])}}"><button type="button" class="edit pull-right btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                        </div>
                        <div class="butt">
                        {{Form::open()}}
                            {{ method_field('DELETE') }}
                            {{Form::hidden('id', $message->id)}}
                            <button type="submit" class="delete pull-right btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
              @endforeach
            <div class="text-center">{{$messages->render()}}</div>
        </div>
    </div>
@endsection

