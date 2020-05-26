<?php

namespace App\Http\Controllers;



use App\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{

    public static function index( Task $task)
    {
//       $allTasks =  Task::all();

        return view('task.index')->with( 'allTasks', $task::all());
    }

    public static function show( $todoId , Task $task  )
    {
        return view('task.show')->with('taskById' , $task::all()->find($todoId));
    }

    public static function create( )
    {
        return view('task.create');
    }

    public static function store( Request $request )
    {
        $request->validate([
            'todoTitle' => 'required|min:6',
            'todoDescription' => 'required',
        ]);
        $todo = new Task();
        $todo->title = $request->input('todoTitle') ;
        $todo->description = $request->todoDescription ;
        $todo->save();
        return redirect('/tasks');
    }

    public static function edit( $todoId  , Task $task)
    {

        return view('task.edit')->with('taskById' , $task::all()->find($todoId));

    }

    public static function update( $todoId ,Request $request , Task $task )
    {
        $request->validate([
            'todoTitle' => 'required|min:6',
            'todoDescription' => 'required',
        ]);
        $task->title = $request->get('todoTitle');
        $task->title = $request->get('todoDescription');
        $task->save();
        return redirect('/tasks');
    }

    public static function destroy( $todoId )
    {
        $todo =  Task::all()->find($todoId);
        $todo->delete();
        return redirect('/tasks');
    }
}
