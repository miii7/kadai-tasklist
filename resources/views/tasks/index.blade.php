@extends('layouts.app')

@section('content')
  
    @if(Auth::check())
    
    
   
   <h1>タスク一覧</h1>
                

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>ステータス</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    {{-- メッセージ詳細ページへのリンク --}}
                    <td>{!! link_to_route('tasks.show', $task->id, ['task' => $task->id]) !!}</td>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        
    @endif
    
    
    

    
             
              {{-- ログアウトへのリンク --}}
               {!! link_to_route('logout.get', 'Logout') !!}
             
             @else
             
             <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Tasklist</h1>
             
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            {{-- ログインページへのリンク --}}
            {!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}
             @endif
        </div>
    </div>
@endsection
