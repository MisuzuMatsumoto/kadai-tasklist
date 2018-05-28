@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>タスク新規入力ページ</h1>
    
    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
        {!! Form::label('content', 'タスク名:') !!}
        {!! Form::text('content') !!}
       
        {!! Form::label('status','進捗:') !!}
        {!! Form::text('status') !!}
        
        
        {!! Form::submit('追加') !!}
    {!! Form::close() !!}
   

@endsection