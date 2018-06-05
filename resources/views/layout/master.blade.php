<!DOCTYPE html>
<html lang="pl_PL">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog programistyczny o nowinkach technologicznych i rozwoju osobistym ">
    <meta name="author" content="Rafał Fidurski">
    <link rel="shortcut icon" href="asset('icons/favicon.png')">
    <title>l i n i e k o d u . p l</title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
     <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>    
<body style="font-family: 'Fira Sans', sans-serif;">
<div class="col-md-12">
    <div class="alert alert-info" id="cookies">
        <img src="{{ URL::to('/asset/icons/cookies.png') }}" style="float:left; padding-left: 100px;">
        <p class="text-center">Korzystanie z witryny liniekodu.pl oznacza zgodę na wykorzystanie plików cookies.</p><br>
        <p class="text-center"><u>Akceptuję politykę plików cookies (Nie pokazuj więcej tego powiadomienia!)</u></p>
    </div>
</div>
    @include('layout.navi')
    @include('layout.jumb')
    @include('layout.slider')
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>   
    @include('layout.tags')

    @include('layout.banner')   

    <div class="container">
        @include('layout.footer')
    </div>
<script>
    $(document).ready(function(){
        $('#cookies').click(function(){
            $('#cookies').fadeOut(800)
        });
    });
</script>
</body>
</html>
