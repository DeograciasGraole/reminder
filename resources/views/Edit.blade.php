@extends('layouts.editlay')

@section('content')
<div class="edit-container">
            <h2>Edit Task</h2>

            <form action="{{route('task.update',['task'=>$task->id])}}" method="POST">
               @csrf
               @method('PUT')
                <label for="task">Task Name</label>
                <input
                    type="text"
                    id="task"
                    name="Title"
                    value="{{$task->Title}}"
                    required
                />

                <label for="category">Category</label>
                <input
                    type="text"
                    id="category"
                    name="category"
                    value="{{$task->category}}"
                    required
                />

                <button type="submit">Update Task</button>
            </form>

            <a href="{{route('Task.index')}}" class="back-link">← Back to Task List</a>
        </div>
@endsection