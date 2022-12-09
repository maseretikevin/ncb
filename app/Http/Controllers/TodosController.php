<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){
        
        $todos = Todo::all();
        return view('Todos.index')->with('todos',$todos);
    }
    public function show($todoid){
        // dd($todo);
        $todo = Todo::find($todoid);
        return view('Todos.show')->with('todo', $todo);
    }
}
