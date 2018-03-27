<?php

namespace ToDoList\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Laravel ToDoList";
        return view('index')->with('title', $title);
    }

    public function about(){
        return view('about');
    }

    public function service(){
        $arr = array(
            "title" => "ToDoList Service",
            "service" => ["Web Design", "Programming", "Laravel"]
        );
        return view('service')->with($arr);
    }

    public function add(){
        return view('todoList.create');
    }

    public function edit(){
        return view('todoList.edit');
    }

    public function show(){
        return view('todoList.show');
    }
}
