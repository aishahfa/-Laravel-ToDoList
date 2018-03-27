@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit ToDoList</h1>
        @if(count($todo) > 0)
            @foreach($todo as $list)
                {!! Form::open(['action' => ['ToDoListController@update', $list->id], 'method' => 'POST']) !!}
                    <div class="form-group">
                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title', $list->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('note', 'Note') }}
                        {{ Form::textarea('note', $list->note, ['class' => 'form-control', 'placeholder' => 'Note']) }}
                    </div>
                    {{ Form::hidden('_method','PUT') }}
                    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
            @endforeach
        @else
            <p>No ToDoList found</p>
        @endif
    </div>
@endsection