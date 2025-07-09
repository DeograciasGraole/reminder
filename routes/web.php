<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
Route::get('/', function () {
    return redirect()->route('Task.index');
});

Route::get('/tasks',function(){
     $tasks=Task::latest()->paginate();
   
    return view('index',['tasks'=>$tasks]);
})->name('Task.index');


Route::get('/tasks/create', function () {
    return redirect()->route('Task.index');
});

Route::post('/tasks/create',function(TaskRequest $request){

      $data=$request->validated();
      Task::create($data);
    

      return redirect()->back();
})->name('Task.store');

Route::get('/tasks/{task}',function(Request $request ,Task $task){
   return view('show',['task'=>$task]);
});
 




Route::get('/tasks/{task}/edit',function(Task $task){
    
    return view('Edit',['task'=>$task]);
})->name('Task.edit');

Route::put('/task/{task}/toggle-complete',function( Request $request,Task $task){
   $task->ToggleCompleted();
   return redirect()->back();
})->name('Task.completed');

Route::put('/tasks/{task}', function(TaskRequest $request, Task $task){

    $data=$request->validated();
    $task->update($data);
     
       return redirect()->route('Task.index');
})->name('task.update');


Route::delete('/tasks/{task}',function(Task $task){
      $task->delete();

      return redirect()->route('Task.index');
})->name('Task.destroy');

