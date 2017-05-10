@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="page-header">ToDo編集</h2>
    @if(Auth::check())
    {!! Form::open(['route' => ['todo.update', $todo->id], 'method' => 'PUT']) !!}
    <div class="form-group">
        {!! Form::input('text', 'title', $todo->title, ['required', 'class' => 'form-control']) !!}
    </div>
    <button type="submit" class="btn btn-success pull-right">更新</button>
    {!! Form::close() !!}
    @endif
</div>
@endsection
