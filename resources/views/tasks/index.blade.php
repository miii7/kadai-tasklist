@extends('layouts.app')

@section('content')
   <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Taskslist</h1>
             @if (Auth::check())
              {{-- ログアウトへのリンク --}}
               {!! link_to_route('logout.get', 'Logout') !!}
             @else
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            {{-- ログインページへのリンク --}}
            {!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}
             @endif
        </div>
    </div>
@endsection
