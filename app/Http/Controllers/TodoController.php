<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

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
        $request->validate([
            'title' => 'required|max:255',
            'status' => 'required',
        ]);

        Todo::create($request->all());

        return redirect('/');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'title' => 'required|max:255',
            'status' => 'required',
        ]);

        $todo->title = $request->title;
        $todo->status = $request->status;
        $todo->detail = $request->detail;
        $todo->save();

        return redirect('/');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();

        return redirect('/');
    }
}
