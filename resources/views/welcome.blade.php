@extends('layouts.app')

@section('content')
   <!--ログイン済ユーザーなら以下を表示-->
    @if (Auth::check())

        <?php 
        $user = Auth::user();
        ?>
       
        {!! link_to_route('tasklists.index', 'タスクリスト', null, ['class' => 'btn btn-lg btn-primary']) !!}
        
    <!--未ログインユーザーなら以下を表示 -->
    @else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Tasklists</h1>
            {!! link_to_route('signup.get', 'Sign up now', null, ['class' => 'btn btn-lg btn-primary']) !!}
            {!! link_to_route('login', 'Log in', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
    
    @endif
@endsection