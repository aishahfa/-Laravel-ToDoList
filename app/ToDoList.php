<?php

namespace ToDoList;

use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    protected $table = 'todolist';
    public $primaryKey = 'id';
    public $timestaps = true;
}
