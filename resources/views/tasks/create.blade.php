@extends('layouts.app')

@section('content')

    <h1>タスクリスト新規作成ページ</h1>
    <div class="row">
        <div class="col-xs-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('title', 'タスク:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                    
                <div class="form-group">
                    {!! Form::label('content', 'メモ:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                 {!! '<p style="color: blue;">タスクをメモしてね～</p>' !!}
  
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
 
@endsection
   