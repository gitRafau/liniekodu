@extends('layout.master')
@section('content')
<div class="row">
    <div class="jumbotron" style="background-color: #c4e3f3; text-align: center">
        <div class="row">
            <h5>Skorzystaj z poniższego formularza, aby wysłać do mnie wiadomość.</h5>
            <h5>Jeśli wolisz standardowy email to pisz na: <b><text>rafal&nbsp;<@>&nbsp;liniekodu.pl</text></b></h5>
            <hr>
            <div class="col-md-4 col-md-offset-4">
                @if($errors->any())

                    @foreach($errors->all() as $blad)
                        <div class="alert alert-danger" role="alert">
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <span class="sr-only"></span>
                            {{ $blad }}
                        </div>
                    @endforeach

                @endif
            {{ Form::open(['route' => 'pages.store']) }}

            <div class="form-group">
                {!! Form::label('title_contact', "Tytuł wiadomości (wymagane)") !!}
                {!! Form::text('title_contact', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('mail_contact', "Twój e-mail (wymagane)") !!}
                {!! Form::text('mail_contact', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('body_contact', "Wiadomość (wymagane)") !!}
                {!! Form::textarea('body_contact', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Wyślij', ['class' => 'btn btn-primary']) !!}
            </div>


            </div>

        </div>
    </div>
</div>


@endsection