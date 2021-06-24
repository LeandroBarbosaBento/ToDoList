@extends('layouts.main_layout')

@section('content')
<form method="POST" action="{{route('new_task_submit')}}" >
@csrf
<h2>Create new task</h2>
<hr>
<div class="row">
    
    <div class="col-md-8">
        <div class="form-group">
            <label for="text_task">Task</label>
            <input type="text" name="text_task" class="form-control" id="text_task" placeholder="Task">
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="select_context">Select the context</label>
            <select class="form-control" name="select_context" id="select_context">
                <option>Home</option>
                <option>Computer</option>
                <option>Shopping</option>
                <option>Work</option>
            </select>
        </div>
    </div>
</div>




<div class="form-group">
    <label for="task_description">Description</label>
    <textarea class="form-control" id="task_description" name="task_description" rows="3" placeholder="Write some information about the task" ></textarea>
</div>

<input type="submit" class="btn btn-primary" value="Submit">
<a href="{{route('home')}}" class="btn btn-secondary">Cancel</a>
</form>
@endsection