@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create ToDoList</h1>
        {!! Form::open(['action' => 'ToDoListController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
            </div>
            <div class="form-group">
                {{ Form::label('note', 'Note') }}
                {{ Form::textarea('note', '', ['class' => 'form-control', 'placeholder' => 'Note']) }}
            </div>
            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        {!! Form::close() !!}
    </div>
@endsection