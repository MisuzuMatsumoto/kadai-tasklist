@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>タスク新規入力ページ</h1>
    
                {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク名:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                   
                </div>
               
                <div class="form-group">
                    {!! Form::label('status','進捗:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('追加', ['class' => 'btn btn-primary']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>

@endsection