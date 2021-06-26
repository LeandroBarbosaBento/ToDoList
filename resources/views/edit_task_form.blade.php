@extends('layouts.main_layout')

@section('content')
<form method="POST" action="{{route('task_edit_submit')}}" >
@csrf
<h2>Edit task</h2>
<hr>

    <input type="hidden" name="id" value="{{$task->id}}">

<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="text_task">Task</label>
            <input type="text" name="text_task" class="form-control" id="text_task" value="{{$task->task}}" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="select_context">Select the context</label>
            <select class="form-control" name="select_context" id="select_context">
                <option <?php if($task->context == 'Home') echo 'selected' ?> >Home</option>
                <option <?php if($task->context == 'Computer') echo 'selected' ?> >Computer</option>
                <option <?php if($task->context == 'Shopping') echo 'selected' ?> >Shopping</option>
                <option <?php if($task->context == 'Work') echo 'selected' ?> >Work</option>
            </select>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="task_description">Description</label>
    <textarea class="form-control" id="task_description" name="task_description" rows="5">{{$task->description}}</textarea>
</div>

<input type="submit" class="btn btn-primary" value="Save">
<a href="{{route('home')}}" class="btn btn-secondary">Cancel</a>
</form>
@endsection