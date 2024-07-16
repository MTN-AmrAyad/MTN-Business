<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{


    public function allTasks($dep)
    {
        // Retrieve tasks for the specified department
        $tasks = Task::where('department', $dep)->get();

        // Initialize an array to store task details
        $taskDetails = [];

        // Loop through each task and retrieve its details
        foreach ($tasks as $task) {
            $taskDetails[] = [
                'id' => $task->id,
                'task' => $task->task,
                'status' => $task->status,
            ];
        }

        // Return the task details as JSON response
        return response()->json($taskDetails);
    }

    public function store(Request $request)
    {
        $task = Task::create($request->all());
        return response()->json($task, 201);
    }

    // public function show($id)
    // {
    //     $task = Task::findOrFail($id);
    //     return response()->json($task);
    // }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->update($request->all());
        return response()->json($task, 200);
    }

    public function destroy($id)
    {
        Task::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
