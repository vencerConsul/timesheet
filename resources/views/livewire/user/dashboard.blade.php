@extends('layouts.app')
@section('title', 'Dashboard')

@section('content')
<div>
    <nav class="navbar navbar-expand-sm navbar-light bg-glass dashboard-navbar pl-4 pr-4 sticky-top">
        <a class="navbar-brand" href="#">
            <img class="w-25 img-fluid" src="{{asset('./img/hd-logo.png')}}" alt="technodream">
        </a>

        <ul class="navbar-nav align-items-center ml-auto mt-2 mt-lg-0">
            <li class="nav-item mr-3">
                <a href="#" class="nav-link"><i class="las la-bell"></i></a>
            </li>
            <li class="nav-item">
                <div class="dropdown user-dropdown">
                    <button class="btn bg-transparent dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="avatar" src="{{Auth::user()->avatar_url}}" alt="">
                        <span class="text-white font-weight-normal">{{Auth::user()->name}}</span>
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


    <div class="container-fluid bg-transparent">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic voluptas, voluptate debitis illum ullam nostrum quasi quisquam iusto. Voluptates, dicta.
    </div>
</div>

@endsection