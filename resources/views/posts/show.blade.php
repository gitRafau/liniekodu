@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-4">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <br>
                <a href="#" class="img-rounded">
                    <img src="{{URL::asset('images/'.$posts->image)}}" alt="foto" width="450" height="300">
                </a>
            </div>
            <br><br><br><br>
            <!--Wyświetlenie konkretnego posta-->
            <h2>{{ $posts->title }}</h2>
            <h6> {{ $posts->created_at->format(' j F Y') }}</h6>
            <h6> {{ $posts->author }}</h6>
            <p> {{ $posts->body }} </p>
            <p><a class="btn btn-info" href="{{'/'}}" role="button">wszystkie wpisy &raquo;</a></p>
        </div>
    </div>
    <!--Wyświetlenie komentarzy-->
    <h3>Komentarze</h3>
    @foreach($posts->comments as $comment)
        <div class="list-group-item panel-info col-md-8" style="margin-top: 10px;">
            <span style="color:gray;">{{ $comment->created_at->toDateTimeString() }}</span>
            <h5>{{  $comment->body }}</h5>
            @if (Auth::guest())
            @else
               {{--
                {!! Form::model($comment, ['route' =>['comments.delete', $comment], 'method' => 'DELETE']) !!}
                &nbsp;<button class="btn btn-danger btn-xs">USUŃ</button>
                {!! Form::close() !!}
                --}}
            @endif
        </div>
        <br>
    @endforeach
    <div class="container">
        <div class="col-md-9">
            <form action="/posts/{{$posts->id}}/comments" method="POST" role="form">
                {{ csrf_field() }}
                <br>
                <div class="form-group">
                    <label for="komentarz">Dodaj komentarz</label>
                    <textarea name="body" id="inputBody" class="form-control" rows="6"
                              placeholder="Skomentuj..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Dodaj</button>
            </form>
        </div>
    </div>
    <hr>
@endsection