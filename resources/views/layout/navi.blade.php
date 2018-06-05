<div class="container">
    <div class="navbar navbar-left">
        <a href="{{'/login'}}">
            <img src="{{ URL::to('/asset/icons/user.png') }}" style="margin-top: 7px;">
        </a>
         @if (Auth::guest())
         @else
         <a href="{{ route('messages.index')}}">        
            <img src="{{ URL::to('/asset/icons/mail.png') }}" style="margin-top: 7px;">
        </a>               
        @endif
        {{--Facebook--}}
        
                <a href="http://facebook.com/rafal.fidurski" target="_blank">
                     <img src="{{ URL::to('/asset/icons/fb.png') }}" width="35px;" style="margin-top: 7px; margin-left: 60px;">
                </a>          
        {{--Intagram--}}
        
                <a href="http://instagram.com/fidur_r" target="_blank">
                <img src="{{ URL::to('/asset/icons/insta.png') }}" width="35px;" style="margin-top: 7px; margin-left: 20px;"">
                </a>
   
        {{--Tweeter--}}
       
                <a href="https://twitter.com/fidurski_rafal" target="_blank">
                <img src="{{ URL::to('/asset/icons/twitter.png') }}" width="35px;" style="margin-top: 7px; margin-left: 20px;"">
                </a>
            
        {{--LinkedIn--}}
        
                <a href="https://www.linkedin.com/in/rafa%C5%82-fidurski-5b136213a/" target="_blank">
                <img src="{{ URL::to('/asset/icons/linked.png') }}" width="35px;" style="margin-top: 7px; margin-left: 20px;"">
                </a>
           
    </div>
    <div class="navbar navbar-right">
        <div class="container-fluid">
            <ul class="nav navbar-nav" style="font-size: 13px;">
                <li class="#">
                    <a href="{{'/'}}"><b>Strona Główna</b></a>
                </li>
                @if (Auth::guest())
                @else
                <li>
                    <a href="/posts/create"><b>Nowy wpis</b></a>
                </li>
                @endif
                <li>
                    <div class="dropdown" style="margin-top: 6px;">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span style="color: #337ab7; font-size: 13px; font-weight: 800">Archiwum</span>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            @foreach ($archives as $arch)
                            <li>
                                <a style="color: #337ab7; font-family: 'Fira Sans', sans-serif; font-size: 13px;" href="/?month={{ $arch['month'] }} &year={{ $arch['year'] }}" style="color: #337ab7;">
                                    {{ $arch['month'] . ' ' . $arch['year'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                <li>
                    <a href="/contact"><b>Kontakt</b></a>
                </li>
                <li>
                    <input style="margin-left: 5px; margin-top: 8px;" type="search" name="search" id="input" class="form-control" placeholder="Szukaj artykułu...">
                </li>
                <li>
                    <button style="margin-left: 20px; margin-top: 8px;" type="button" class="btn btn-large btn-block btn-info">szukaj</button>
                </li>
                <ul class="nav navbar-nav" style="margin-left: 15px;">
                    <!-- Authentication Links -->
                    @if (Auth::guest())

                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                         <span class="glyphicon glyphicon-user"></span> {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    <span class="glyphicon glyphicon-off"></span>&nbsp;Wyloguj się
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </ul>
        </div>
    </div>
</div>
