@extends('layouts.app')

@section('Taskcreate')
 <form class="form" action="{{route("Task.store")}}"  method="POST" >
    @csrf

        <input  type="text" name= "Title" placeholder="Task name" 
       id="{{ $errors->has('Title') ? 'error' : '' }}"  value="{{old('Title')}}" />

        <input type="text" name="category" placeholder="Category" 
        id="{{ $errors->has('category') ? 'error' : '' }}" value="{{old('category')}}"/>      
        <button type="submit">Add Task</button>
 </form>
@endsection

@section('content')

@forelse ($tasks as $task )
    
<tr>
              <td data-label="Task">{{ $task->Title}}</td>
              <td data-label="Category">{{$task->category}}</td>
              <td data-label="Due Time">{{$task->created_at->format('H:i') ?? '10:00' }}</td>
              <td data-label="Status">

                <form onchange="this.submit()" method="post" action="{{route('Task.completed',['task'=>$task->id])}}">
                    @csrf
                    @method('PUT')
                    <label for="check"> {{$task->completed ? 'completed' : 'not completed'}}</label>
                    <input type="checkbox" name="check" class="done-checkbox"  {{$task->completed ?  'checked' : ''}}  />
                </form>
                
              </td>
              <td data-label="Actions">
                    <div class="btn-group">
                        <button class="edit-btn">
                            <a href="{{route('Task.edit',['task'=>$task->id])}}">Edit</a>
                        </button>
                        <form method="post" action="{{route('Task.destroy',['task'=>$task->id])}}">
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="delete-btn">Delete</button>
                        </form>
                       
                    </div>
               </td>
 </tr>
@empty
<tr>
        <p>No tasks yet in To do list</p>       
 </tr>
   
@endforelse


@endsection