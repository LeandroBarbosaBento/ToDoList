<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class Main extends Controller
{
    // ===============================================
    public function home(){

        $tasks = Task::where('done', null)
                    ->orderBy('created_at','desc')
                    ->get();
        return view('home',['tasks' => $tasks, 'page' => 'All tasks']);
        /**
         * O argumento chega no interior da view 'home'
         * com o nome 'tasks' dado no vetor
         */
    }
    // ===============================================
    public function home_done_tasks(){
        $tasks = Task::where('done', '!=', null)
                    ->orderBy('created_at','desc')
                    ->get();
        return view('home', ['tasks' => $tasks, 'page' => 'Done tasks']);
    }

    public function home_deleted_tasks(){
        $tasks = Task::withTrashed()
                    ->where('deleted_at', '!=', null)
                    ->get();
        return view('home', ['tasks' => $tasks, 'page' => 'Deleted tasks']);
    }

    // ===============================================
    public function new_task_form(){
        return view('new_task_form');
    }
    // ===============================================
    public function new_task_submit(Request $request){
        $task = new Task();
        $task->task = $request->input('text_task');
        $task->context = $request->input('select_context');
        $task->description = $request->input('task_description');
        $task->save();
        return redirect()->route('home');
    }

    // ===============================================
    public function show_home(){

        $tasks = Task::where('context', 'Home')
                    ->where('done', null)
                    ->orderBy('created_at','desc')
                    ->get();

        return view('home',['tasks' => $tasks, 'page' => '@home tasks']);
    }

    // ===============================================
    public function show_work(){

        $tasks = Task::where('context', 'Work')
                    ->where('done', null)
                    ->orderBy('created_at','desc')
                    ->get();

        return view('home',['tasks' => $tasks, 'page' => '@work tasks']);
    }
    // ===============================================
    public function show_computer(){

        $tasks = Task::where('context', 'Computer')
                    ->where('done', null)
                    ->orderBy('created_at','desc')
                    ->get();

        return view('home',['tasks' => $tasks, 'page' => '@computer tasks']);
    }
    // ===============================================
    public function show_shopping(){

        $tasks = Task::where('context', 'Shopping')
                    ->where('done', null)
                    ->orderBy('created_at','desc')
                    ->get();

        return view('home',['tasks' => $tasks, 'page' => '@shopping tasks']);
    }
    // ===============================================
    public function task_done($id_task){
        $task = Task::find($id_task);
        $task->done = new \DateTime();
        $task->save();

        return redirect()->route('home');
    }
    // ===============================================
    public function task_undone($id_task){
        $task = Task::find($id_task);
        $task->done = null;
        $task->save();

        return redirect()->route('home');
    }
    // ===============================================
    public function task_edit($id_task){
        $task = Task::find($id_task);
        return view('edit_task_form', ['task' => $task]);
    }
    // ===============================================
    public function task_edit_submit(Request $request){
        $task = Task::find($request->input('id'));
        $task->task = $request->input('text_task');
        $task->context = $request->input('select_context');
        $task->description = $request->input('task_description');
        $task->updated_at = new \DateTime();
        $task->save();

        return redirect()->route('home');
    }
    // ===============================================
    public function task_see_description($id_task){
        $task = Task::find($id_task);
        return view('task_see_description', ['task' => $task]);
    }
    // ===============================================
    public function task_delete($id_task){
        $task = Task::find($id_task);
        $task->deleted_at = new \DateTime();
        $task->save();

        return redirect()->route('home');
    }

    // ===============================================

    // ===============================================

    
}
