@extends('layout.app')
@section('content')

    <h2 class="page-header">ToDo作成</h2>
    {!! Form::open(['route' => 'todo.store']) !!}
        <div class="form-group">
            {!! Form::input('text', 'title', null,['required', 'class' => 'form-controll', 'placeholder' => 'Todo内容']) !!}
        </div>
        <button type="submit" class="btn btn-success pull-right">追加</button>
    {!! Form::close() !!}

@endsection