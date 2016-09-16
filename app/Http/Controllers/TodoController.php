<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

use App\Http\Requests;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        $data = [
            'todos' => $todos
        ];
        return view('todos.index', $data);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store(Request $request)
    {
        Todo::create($request->all());

        return redirect('/');
    }

    public function edit()
    {
        return view('todos.edit');
    }

    public function update()
    {

    }

    public function delete(Todo $todo)
    {
        $todo->delete();

        return redirect('/');
    }
}
