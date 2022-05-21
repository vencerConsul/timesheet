@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div>
    <nav class="navbar navbar-expand-sm navbar-light bg-primary dashboard-navbar pl-4 pr-4 sticky-top">
        <a class="navbar-brand" href="#">
            <img class="w-25 img-fluid" src="{{asset('./img/hd-logo.png')}}" alt="technodream">
        </a>

        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item ">
                <div class="dropdown">
                    <button class="btn bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="avatar" src="{{Auth::user()->avatar_url}}" alt="">
                        <span>{{Auth::user()->name}}</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" onclick="document.getElementById('logout').submit()">Signout</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>

                        <form id="logout" action="{{route('logout')}}" method="post">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </nav>


    <div class="container-fluid">
        
    </div>
</div>

@endsection