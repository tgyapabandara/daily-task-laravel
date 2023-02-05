<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\task;
use Illuminate\Console\View\Components\Task as ComponentsTask;

class TaskController extends Controller
{
  //
  public function storedata(Request $request)
  {
    //  dd($request->task_name);
    $task = new Task;
    $this->validate($request, [
      'task_name' => 'required|max:100|min:5',
    ]);
    $task->task = $request->task_name;
    $task->save();
    //
    $data = Task::all();
    //  dd($data);
    // return redirect()->back();
    return view('task')->with('tasks', $data);
  }
  //

  public function UpdateTask($id)
  {
    $task = Task::find($id);
    $task->iscompleted = 1;
    $task->save();
    return redirect()->back();
  }

  public function UpdateTaskAsNotCompleted($id)
  {
    $task = Task::find($id);
    $task->iscompleted = 0;
    $task->save();
    return redirect()->back();
  }

  public function DeleteTask($id)
  {
    $task = Task::find($id);
    $task->delete();
    return redirect()->back();
  }

  public function UpdateTaskDesc($id)
  {
    $task = Task::find($id);
    return view('UpdateTaskDescView')->with('taskdata', $task);
  }

  public function SaveUpdatedTaskDesc(Request $request,)
  {
    //dd($request->t_id);
    $id=$request->t_id;
    $task=$request->task;
    $data=Task::find($id);
    $data->task=$task;
    $data->save();
    $datas=Task::all();
    return view('tasks')->with('tasks',$datas);
  }
}
