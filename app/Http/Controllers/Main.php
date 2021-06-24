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
        return view('home',['tasks' => $tasks]);
        /**
         * O argumento chega no interior da view 'home'
         * com o nome 'tasks' dado no vetor
         */
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

        $tasks = Task::where('context', 'home')
                    ->orderBy('created_at','desc')
                    ->get();

        return view('home',['tasks' => $tasks]);
    }

    // ===============================================
    public function show_work(){

        $tasks = Task::where('context', 'work')
                    ->orderBy('created_at','desc')
                    ->get();

        return view('home',['tasks' => $tasks]);
    }
    // ===============================================
    public function show_computer(){

        $tasks = Task::where('context', 'computer')
                    ->orderBy('created_at','desc')
                    ->get();

        return view('home',['tasks' => $tasks]);
    }
    // ===============================================
    public function show_shopping(){

        $tasks = Task::where('context', 'shopping')
                    ->orderBy('created_at','desc')
                    ->get();

        return view('home',['tasks' => $tasks]);
    }
    // ===============================================
    public function task_done($id_task){
        echo 'done';
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
        $task->save();

        return redirect()->route('home');
    }
    // ===============================================
    public function task_delete($id_task){
        echo 'delete';
    }
    // ===============================================
    public function task_see_description($id_task){
        echo 'description';
    }
    // ===============================================

    // ===============================================

    // ===============================================

    
}
