<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoRequest;
use Illuminate\Http\Request;
use App\Models\Todo;
class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function store(TodoRequest $request)
    {
        Todo::create([
            'task' => $request->task,
            'completed' => false,
        ]);
        return redirect()->back()->with('success', 'Task created successfully.');
    }

    public function toggleStatus($id)
    {
        $todo = Todo::findOrFail($id);

        $todo->completed = !$todo->completed;
        $todo->save();
        return redirect()->back()->with('success', 'Task status updated successfully.');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect()->back()->with('success', 'Task deleted successfully.');
    }


}
