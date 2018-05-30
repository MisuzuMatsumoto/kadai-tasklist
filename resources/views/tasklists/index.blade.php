@extends('layouts.app')

@section('content')

    <h1>タスクリスト(一覧表示)</h1>
    
    <div class="row">
    <div class="col-xs-12　col-sm-offset-2 col-sm-8　col-md-offset-2 col-md-8　col-lg-offset-3 col-lg-6">

    @if (count($tasklists) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク名</th>
                    <th>進捗</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($tasklists as $tasklist)
                     <tr>
                        <td>{!! link_to_route('tasklists.show', $tasklist->id, ['id' => $tasklist->id]) !!}</td>
                        <td>{{ $tasklist->content }}</td>
                        <td>{{ $tasklist->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasklists.create', '新規タスクの追加', null, ['class' => 'btn btn-primary']) !!}
@endsection