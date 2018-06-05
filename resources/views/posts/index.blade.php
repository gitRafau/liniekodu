@extends('layout.master')
@section('content')
@include('layout.category')
    <div class="row">
        @foreach($posts as $wpis)
            <div class="col-md-4" style="margin-bottom: 20px;">
                <img src="{{URL::asset('images/' . $wpis->image)}}" alt="foto" height="200" width="380" class="img-rounded img-fluid">
                <h2 style="color: orange;">{{ $wpis->title }}</h2>
                <span class="input-group-addon" style="color: #337ab7;">{{ $wpis->created_at->format(' j F Y') }}</span>
                <span class="input-group-addon" style="color: #337ab7;">Autor:&nbsp;{{ $wpis->author}}</span>
                <br>
                <p>{{ $wpis->body }}</p>
                <p><a class="btn btn-secondary" href="/posts/{{ $wpis->id }}" role="button">Czytaj więcej &raquo;</a>
                </p>
                @if (Auth::guest())
                @else
                    <p><a style="float: left;" class="btn btn-warning btn-xs" href="{{ route('posts.edit', $wpis)}}" role="button">EDYTUJ</a></p>

                    {!! Form::model($wpis, ['route' =>['posts.delete', $wpis], 'method' => 'DELETE']) !!}
                    &nbsp;<button class="btn btn-danger btn-xs">USUŃ</button>
                    {!! Form::close() !!}
                @endif
            </div>
        @endforeach
    </div>

    <nav>
        <ul id="button" class="pager" style="font-family: 'Fira Sans', sans-serif; font-size:16px;">
            <li><a href="#">więcej artykułów</a></li>
        </ul>
    </nav>
@endsection