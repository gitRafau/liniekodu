@extends('layout.master')
@section('content')
    <div class="col-md-12">
        <h3 style="text-align: center;">Skrzynka odbiorcza</h3>
        <br>
    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th style="text-align: center;">Data</th>
            <th style="text-align: center;">Tytuł</th>
            <th style="text-align: center;">Nadawca</th>
            <th style="text-align: center;">Treść</th>
            <th style="text-align: center;">Opcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach($messages as $info)
        <tr>
            <td>{{ $info->created_at }}</td>
            <td>{{ $info->title_contact }}</td>
            <td>{{ $info->mail_contact }}</td>
            <td>{{ $info->body_contact }}</td>
            <td><a class="btn btn-info btn-xs" href="#">Pokaż</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@endsection
