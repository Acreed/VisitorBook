{!! Form::open(['url' => '/']) !!}
    {!! Form::label('name') !!}
    {!! Form::text('name', null, ['class'=>'form-control'] ) !!}

    {!! Form::label('E-mail') !!}
    {!! Form::text('email', null, ['class'=>'form-control'] ) !!}

    {!! Form::label('Message') !!}
    {!! Form::text('message', null, ['class'=>'form-control'] ) !!}

    <div class="form-group">
        {!! Form::submit('Send', ['class'=>'btn btn-primary']) !!}
    </div>
{!! Form::close() !!}
