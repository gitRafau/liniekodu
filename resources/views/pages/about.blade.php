@extends('layout.master')
@section('content')
    <div class="jumbotron" style="background-color: #c4e3f3; text-align: center">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Rafał Fidurski</h2>
                    <p>(programista, biegacz, (a od teraz!) blogger).</p><br>
                    <p>Kiedyś za konsoletą i mikrofonem, teraz przed klawiaturą i monitorem
                        <br>(nawet nie czuję, że rymuję :D ).</p><br>
                    <p>A jak to się wszystko zaczęło?<br>Zapraszam Cię do śledzenia wpisów na moim blogu!</p>
                    <h2>Miłej lektury.</h2>
                </div>
                <div class="col-md-4">
                    <img class="img-thumbnail" src="{{URL::asset('/img/rafi.jpg')}}" height="200px;">
                </div>
            </div>
        </div>
    </div>
@endsection