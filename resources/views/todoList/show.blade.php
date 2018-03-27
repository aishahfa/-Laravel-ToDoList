@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="/todoList" class="btn btn-success"><font color="#ffffff">Back</font></a>
        @if(count($todo) > 0)
            @foreach($todo as $list)
                <h1>{{ $list->title }}</h1>
                <div>
                    <p>{{ $list->note }}</p>
                </div>
                <hr>
                <div class="row">
                    <div class="col-10"></div>
                    <div class="col text-right">
                        <a href="/todoList/{{ $list->id }}/edit" class="btn btn-primary"><font color="#ffffff">Edit</font></a>
                    </div>
                    <div class="col text-right">
                        {!! Form::open(['action' => ['ToDoListController@destroy', $list->id],'method' => 'POST']) !!}
                            {{ Form::hidden('_method', 'DELETE') }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                        {!! Form::close() !!}
                    </div>
                </div>
            @endforeach
        @else
            <p>No ToDoList found</p>
        @endif
    </div>
@endsection