@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">


            {!! Form::model($posts, ['route' => ['posts.update', $posts], 'method'=>'PUT']) !!}

            <div class="form-group">
                {!! Form::label('title', "Title:") !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('author', "Autor Posta:") !!}
                {!! Form::text('author', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('body', "Treść:") !!}
                {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Zapisz', ['class' => 'btn btn-primary']) !!}
                {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-info'] ) !!}
            </div>

            @if($errors->any())

                @foreach($errors->all() as $blad)
                    <div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only"></span>
                        {{ $blad }}
                    </div>
                @endforeach

            @endif

            {{ Form::close() }}

        </div>
    </div>
    <hr>
@endsection