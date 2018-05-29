@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>タスク新規入力ページ</h1>
    
    <div class="row">
            <div class="col-xs-6">
        
                {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク名:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                    <div class="row">
                        <div class="col-xs-12"></div>
                        <div class="col-sm-offset-2 col-sm-8"></div>
                        <div class="col-md-offset-2 col-md-8"></div>
                        <div class="col-lg-offset-3 col-lg-6"></div>
                    </div>
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