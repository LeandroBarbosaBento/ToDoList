@extends('layouts.main_layout')

@section('content')
<form>
    <h2>Task description</h2>
    <hr>

    <div class="form-group row">
        <label for="task" class="col-sm-2 col-form-label">Task: </label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="task" value="{{$task->task}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="task_context" class="col-sm-2 col-form-label">Context: </label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="task_context" value="{{$task->context}}">
        </div>
    </div>


    <div class="form-group row">
        <label for="task_description" class="col-sm-2 col-form-label">Description: </label>
        <div class="col-sm-10">
            <textarea readonly class="form-control-plaintext text-justify" id="task_description" name="task_description" rows="8">{{$task->description}}</textarea>
        </div>
    </div>

    <a href="{{route('home')}}" class="btn btn-primary">Home</a>
</form>
@endsection