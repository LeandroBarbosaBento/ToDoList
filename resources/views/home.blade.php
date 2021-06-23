@extends('layouts.main_layout')

@section('content')



@if ($tasks->count() === 0)
    <p>Não há tarefas a serem realizadas</p>
@else
<div class="row">
    <div class="col-md-10 offset-md-1">
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
                    <td>botoes</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif




@endsection

