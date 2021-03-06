@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>id: {{ $tasklist->id }} のタスク編集ページ</h1>
    
      
                {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('content', 'タスク名:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('status','進捗:') !!}
                    {!! Form::text('status' , null, ['class' => 'form-control']) !!}
                </div>
                
                    {!! Form::submit('更新' , ['class' => 'btn btn-default']) !!}
            
                {!! Form::close() !!}
            </div>
        </div>

@endsection