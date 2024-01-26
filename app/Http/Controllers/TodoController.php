<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function Index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function Create()
    {
        return view('todos.create');
    }

    public function Store(Request $request)
    {
        $validated = $request->validate([
        'name' => 'required|min:7|max:15',
        'details' => 'required']);

        $todo = new Todo();
        $todo->name = $request->name;
        $todo->details = $request->details;
        $todo->Completed = false;
        $todo->save();

        session()->flash('msg', 'Todo Created Successfully');
        return redirect('/todos');
    }

    public function Show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show', compact('todo'));
    }

    public function Edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit', compact('todo'));
    }

    public function Update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->name = $request->name;
        $todo->details = $request->details;
        $todo->Completed = false;
        $todo->save();

        session()->flash('msg', 'Todo Updated Successfully');
        return redirect('/todos');
    }

    public function Destroy($id)
    {
        Todo::find($id)->delete();
        
        session()->flash('msg', 'Todo Removed Successfully');     
        return redirect('/todos');
    }

    public function Complete($id)
    {
        $todo = Todo::find($id);
        $todo->Completed = true;
        
        $todo->save();
        session()->flash('msg', 'Todo Completed Successfully');
        return redirect('/todos');
    }
}
