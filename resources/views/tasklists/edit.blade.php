@extends('layouts.app')

@section('content')


    
        <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md 8 col-lg-offset-3 col-lg-6">
            
                <h1>id: {{ $tasklist->id }} のタスク編集ページ</h1>

            {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('status', '状態:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('更新', ['class' => 'btn btn-success']) !!}
        
            {!! Form::close() !!}
        </div>
    　　</div>
@endsection