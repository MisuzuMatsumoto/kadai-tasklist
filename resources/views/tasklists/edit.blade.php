@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>id: {{ $tasklist->id }} のタスク編集ページ</h1>
    
        {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}
            {!! Form::label('content', 'タスク名:') !!}
            {!! Form::text('content') !!}
    
            {!! Form::label('status','進捗:') !!}
            {!! Form::text('status') !!}
    
            {!! Form::submit('更新') !!}
    
        {!! Form::close() !!}

@endsection