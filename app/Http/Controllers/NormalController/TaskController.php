<?php

namespace App\Http\Controllers\NormalController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;


class TaskController extends Controller
{
    //---------- VIEW ---------
    public function task()
    {
        $tasks = Task::latest()->paginate(5);
        return view('normal.task.index', compact('tasks'));
    }


    //---------- ADD PAGE ---------
    public function add_task()
    {
        return view('normal.task.add');
    }


    //---------- STORE ---------
    public function store_task(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()->with('status', 'Unsuccessfully operation!');
        }

        Task::create([
            'title' => $request->title,
            'status' => $request->status,
            'description' => $request->description,
            'user_id' => $request->user_id,
        ]);
        return redirect()->route('normal.task')->with('status', 'Task added successfully!');
    }


    //---------- EDIT PAGE BY ID ---------
    public function edit_task($id)
    {
        $task = Task::findOrFail($id);
        return view('normal.task.edit', compact('task'));
    }


    //---------- UPDATE ---------
    public function update_task(Request $request, $id)
    {
        // Validate input; this will auto-redirect back with errors if it fails
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'status' => 'required',
        ]);

        // Find task
        $task = Task::findOrFail($id);

        // Check if the authenticated user is the owner of the task
        if (Auth::user()->id !== $task->user_id) {
            // Unauthorized if the user doesn't own the task
            return redirect()->route('normal.task')->with('status', 'You are not authorized to delete this task.');
        }

        // Update task
        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
        ]);

        // Redirect with success message
        return redirect()->route('normal.task')->with('status', 'Task updated successfully!');
    }


    //---------- DELETE ---------
    public function delete_task($id)
    {
        // Find the task by ID
        $task = Task::findOrFail($id);

        // Check if the authenticated user is the owner of the task
        if (Auth::user()->id !== $task->user_id) {
            // Unauthorized if the user doesn't own the task
            return redirect()->route('normal.task')->with('status', 'You are not authorized to delete this task.');
        }

        // Delete the task
        $task->delete();

        // Redirect with success message
        return redirect()->route('normal.task')->with('status', 'Task deleted successfully!');
    }
}
