@extends('site.layout')
@section('title')
    Tasks
@endsection

@section('main_content')
    <div>
        <h1>Tasks</h1>
        <ol class="list-tasks">
            @foreach($tasks as $task)
                <li>{{$task->tasks}} <a href="{{route('deleteTask',$task->id)}}">
                        <button class=" btn-dark "><i class="bi bi-trash-fill"></i></button>
                    </a> </li>
            @endforeach
        </ol>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        <form action="{{route('taskForm')}}" class="form-task" method="post">
            @csrf
            <input type="text" class="task-input" id="tasks" name="tasks">
            <button type="submit">add new task</button>
        </form>
    </div>
@endsection
@push('scripts')
    <script>
        var a = 'Hello\' world\'jhjhkj';
        var b = 3 * 3;
        var b = b - 8;

        console.log(b)
        console.log(a)

        const pi = 3.14
        // let listTasks = document.querySelector('.list-tasks');
        // let taskInput = document.querySelector('.task-input');


    </script>
@endpush
