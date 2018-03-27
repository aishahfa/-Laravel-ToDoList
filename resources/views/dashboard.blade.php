@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 text-left">
            <h1>ToDoList</h1>
        </div>
        <div class="col-6 text-right">
            <a href="/todoList/create" class="btn btn-primary"><font color="#ffffff">Add</font></a>
        </div>
    </div>
    @if(count($todo) > 0)
        @foreach($todo as $list)
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3><a href="/todoList/{{$list->id}}">{{ $list->title }}</a></h3>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif 
</div>
@endsection
