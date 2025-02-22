<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Http\Services\Service\TaskService;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public $taskService;
    public function __construct()
    {
        $this->taskService = new TaskService();
    }
    public function index(){
        return response()->json( $this->taskService->index());
    }


    public function store(TaskRequest $request){
        $check=$this->taskService->store($request);
        if($check){
            return response()->json(['message'=>'Task created successfully']);
        }else{
            return response()->json(['message'=>'Task not created']);
        }
    }


    public function update(TaskRequest $request, Task $task){
        $check=$this->taskService->update($request, $task);
        if($check){
            return response()->json(['message'=>'Task updated successfully']);
    }else{
        return response()->json(['message'=>'Task not updated']);
    }
}
    public function destroy(Task $task){
        $task=$this->taskService->destroy($task);
        if($task){
            return response()->json(['message'=>'Task deleted successfully']);
        }else{
            return response()->json(['message'=>'Task not deleted']);
        }
    }
}
