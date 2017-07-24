@extends('layouts.main')
@section('content')
    <h1>{{$title}}</h1>
    <hr>
    <div class="container">
        <div class="content_wrap">
            <a href="{{route('add-content')}}"><button type="button" class="add btn btn-success">Добавить запись   <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            </a>
        <div class="amount">Количество записей <span class="label label-default">8</span></div>
        <div class="messages">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <span>BUJHHcgdafgshjgsdjrfg</span>
                        <span class="pull-right time">время</span>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="theme">Тема</div>
                    <hr>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aperiam cupiditate eligendi maiores molestiae nostrum qui. Accusantium dicta, dignissimos distinctio doloribus eos esse facilis fugiat, iure nam neque possimus quis ut? A accusantium ad amet aspernatur consequatur consequuntur culpa debitis dolore doloremque esse est, eum ex fugiat, illo, illum inventore laborum maxime molestias natus nobis perspiciatis possimus quam quis ratione recusandae rem repellendus saepe sed sunt veniam! Accusantium amet assumenda earum esse fugit saepe soluta ullam vero voluptates? Assumenda atque aut commodi cum delectus, deserunt dignissimos distinctio dolor dolore doloribus eligendi facere hic impedit iusto laborum maiores nihil nostrum nulla numquam obcaecati omnis porro possimus quasi quia quidem quis quod quos ratione recusandae saepe tenetur totam ullam voluptatem. Accusamus consectetur eius et modi nihil optio, temporibus ut vel? Aperiam dicta dolore facere in ipsa minima molestias quam quos sed, voluptates! Assumenda culpa distinctio fugit iste iusto neque nesciunt provident vero.</div>
                    <div class="pull-right">
                        <button type="button" class="delete pull-right btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                        <button type="button" class="edit pull-right btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection

