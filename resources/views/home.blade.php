@extends('layouts.main_layout')

@section('content')

<a href="{{route('new_task_form')}}" class="btn btn-primary mb-2">Create New Task</a>
<a href="{{route('home')}}" class="btn btn-primary mb-2">List all tasks</a>
<a href="{{route('home_done_tasks')}}" class="btn btn-primary mb-2">List all done tasks</a>

<hr>

<div class="my-2 text-center">
    Contexts: 
    <a href="{{route('context_home')}}" class="btn btn-outline-primary mb-2">Home</a>
    <a href="{{route('context_work')}}" class="btn btn-outline-primary mb-2">Work</a>
    <a href="{{route('context_computer')}}" class="btn btn-outline-primary mb-2">Computer</a>
    <a href="{{route('context_shopping')}}" class="btn btn-outline-primary mb-2">Shopping</a>
</div>

<hr>


@if ($tasks->count() === 0)
    <p>There are no tasks.</p>
@else
<table class="table table-hover"> 
    <thead class="thead-dark">
        <tr>
        <th>Task</th>
        <th>Context</th>
        <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($tasks as $task)
        <tr>
            <td>{{$task->task}}</td>
            <td>{{$task->context}}</td>
            <td>
                @if ($task->done == null)
                    <a href="{{route('task_done',['id'=> $task->id])}}" class="btn btn-primary btn-sm" title="Check">
                        <i class="fas fa-check"></i>
                    </a>
                @else
                    <a href="{{route('task_undone',['id'=> $task->id])}}" class="btn btn-outline-primary btn-sm" title="Uncheck">
                        <i class="fas fa-times"></i>
                    </a>
                @endif
                
                <a href="{{route('task_edit',['id'=> $task->id])}}" class="btn btn-primary btn-sm" title="Edit">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="{{route('task_see_description',['id'=> $task->id])}}" class="btn btn-primary btn-sm" title="See description">
                    <i class="fas fa-info-circle"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif




@endsection

