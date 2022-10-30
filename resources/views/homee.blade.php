@extends('layouts/header')

@section('content')
<br>
<div class="card-body">
 @auth
 <p>Welcome <b>{{ Auth::user()->name }}</b></p>
 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
 @endauth
 @guest
 <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
 <a class="btn btn-info" href="{{ route('register') }}">Register</a>
 @endguest
</div>
@endsection