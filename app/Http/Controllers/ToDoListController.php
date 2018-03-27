<?php

namespace ToDoList\Http\Controllers;
use ToDoList\Http\Controllers\Log;
use Illuminate\Http\Request;
use ToDoList\ToDoList;
use DB;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user()->id;
        $todo = DB::select("SELECT * FROM todolist WHERE owner = ?", [$id]);
        //return view('dashboard')->with('todo', $todo);
        //$todo = ToDoList::orderBy('created_at', 'desc')->paginate(5);
        return view('dashboard')->with('todo',$todo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todoList.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'note' => 'required'
        ]);

        $todo = DB::insert("INSERT INTO todolist (title, note, owner) VALUES (?, ?, ?)", [$request->input('title'), $request->input('note'), auth()->user()->id]);

        if($todo){
            return redirect('todoList')->with('success', 'ToDoList created');
        }
        else{
            return redirect('todoList')->with('failed', 'ToDoList not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$todo = ToDoList::find($id);
        $todo = DB::select("SELECT * FROM todolist WHERE id = ?", [$id]);
        return view('todoList.show')->with('todo', $todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$todo = ToDoList::find($id);
        $todo = DB::select("SELECT * FROM todolist WHERE id = ?", [$id]);
        return view('todoList.edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'note' => 'required'
        ]);

        //$todo = ToDoList::find($id);
        //$todo->title = $request->input('title');
        //$todo->note = $request->input('note');
        //$todo->save();
        $todo = DB::update('UPDATE todolist SET title = ?, note = ? WHERE id = ?', [$request->input('title'), $request->input('note'), $id]);
        return redirect('todoList')->with('success', 'ToDoList edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$todo = ToDoList::find($id);
        //$todo->delete();
        $todo = DB::delete('DELETE FROM todolist WHERE id = ?', [$id]);
        return redirect('todoList')->with('success', 'ToDoList Removed');
    }
}
