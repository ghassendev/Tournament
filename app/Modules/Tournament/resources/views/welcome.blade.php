<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tournament</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
        </style>
    </head>
    <body>
        <div class="container">
        @extends('layouts.header')
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('showUserListTournament') }}">Tournament</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('showUserListTournament') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('showUserCreateTournament') }}">Create Tournoi</a>
                    </li>
            </div>
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        </nav>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="container">
            






        @if(count($tournament)>0)
        <div class="row">
          @foreach ($tournament as $tour)
		
         <div class="col-xl-3 col-lg-4 col-md-6  col-sm-6 col-4.text-center.ml-3  mt-3">
             <div class="card " style="height: 450px">    
              <div class="card-header bg-dark text-light text-center" style="height: 70px"><h4>{{$tour->title}}</h4></div>
                 <div class="card-body">
		   
                 <div class="text-center">{{$tour->description}}
                    <hr>
                 <p >Numbers of Players {{$tour->playerNumber}}</p>
                 <p >Numbers of matchs {{$tour->matchsNumber}}</p>
                </div>
            <hr>
            <form action="{{ route('handlerUserJoinTournement') }}" method="POST">
                @csrf
            <input type="hidden" name="userId" value="{{Auth::user()->id}}" >
            <input type="hidden" name="tournamentId" value="{{$tour->id}}" >
            <input type="submit" class="btn btn-success float-center" value="JOIN" >
            </form>
          </div>
        </div>
      </div>



      @endforeach
</div>
<hr>

</div>
</div>
</div>


@endif


    </body>
</html>
