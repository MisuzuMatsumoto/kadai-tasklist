@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>タスク新規入力ページ</h1>
    
    <!--<div class="row">-->
    <!--        <div class="col-xs-6">-->
    <!--上は本来あったほう、下はやってみたほう-->
    
    <div class="row">
    <div class="col-xs-12　col-sm-offset-2 col-sm-8　col-md-offset-2 col-md-8　col-lg-offset-3 col-lg-6">
    
        
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