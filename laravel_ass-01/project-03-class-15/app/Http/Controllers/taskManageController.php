<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class taskManageController extends Controller
{
    ///////task create method
    public function create()
    {
        return view('users.taskInput');
    }

    ///////task store method
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'details' => 'required'
        ]);

        Task::create([
            'name' => request('name'),
            'details' => request('details')
        ]);
        return redirect()->route('home')->with('taskCreateMessage', 'Task created successfully');

    }


    ////task display or indexing methode
    public function index()
    {
        $allTasks = Task::all();
        return view('home',compact('allTasks'));
    }

    public function show($id)
    {
        $task = Task::find($id);
        return view('users.taskUpdate', compact('task'));
    }

    ////task update methode
    public function update($id)
    {
        $this->validate(request(), [
            'name' => 'required',
            'details' => 'required'
        ]);

        Task::find($id)->update([
            'name' => request('name'),
            'details' => request('details')
        ]);

        return redirect()->route('home')->with('successMessage', 'Task edited successfully');
    }

    ////task delete methode
    public function delete($id){
        Task::find($id)->delete();

        return redirect()->route('home')->with('deleteMessage', 'DELETE Success');
    }

    ////task status update methode
    public function updateStatus($id,$status){
        Task::find($id)->update([
            'status'=> $status
        ]);
        return redirect()->route('home')->with('successMessage', 'Task status update successfully');

    }

}
