@extends('index')

@section('content')
		@include('_common.form')

        <div class="text-right"><b>Всего сообщений:</b> <i class="badge">{{$count}}</i></div><br/>
		@if ( !$messages->isEmpty() )
        <div class="messages">
			@foreach($messages as $mes)
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>{{$mes->username}}</span>
                        <span class="pull=right label label-info">{{$mes->created_at}}</span>
                    </h3>
                </div>

                <div class="panel-body">
                    {{$mes->message}}
                    <hr/>
                    <div class="pull-right">
                        <a class="btn-btn-info" href="#">
                            <i class="glyphicon glyphicon-pencil"></i>
                        </a>
                        <button class="btn btn-danger">
                            <i class="glyphicon glyphicon-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
			@endforeach

			{!!$messages->render()!!}
        </div>
		@endif
@stop
