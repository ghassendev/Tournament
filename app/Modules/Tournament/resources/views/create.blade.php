<html>
@extends('layouts.app')


<body>
    <div class="container">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Tournament</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('showUserIndexTournament') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('showUserCreateTournament') }}">Create Tournament</a>
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
    <div class="container mt-5">
        <h1 class="text-center" >Create Tournament</h1>
        
        <form action="{{ route('handleUserAddTournament') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" id="description"rows="4"></textarea>
            </div>

            <div class="form-group">
                <label>number of players per match</label>
                <input type="number" class="form-control" name="nbPlayers"id="nbPlayers">
            </div>

            <div class="form-group">
                <label>tree</label>
                <input type="number" class="form-control" name="nbTree"id="nbTree">
            </div>

            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price"id="price">
            </div>

            <input type="submit" name="send" value="Submit" class="btn btn-dark btn-block">
        </form>
    </div>
</body>

</html>
