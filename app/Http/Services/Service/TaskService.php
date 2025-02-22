<?php

namespace App\Http\Services\Service;

use App\Http\Requests\TaskRequest;
use App\Http\Services\Contract\TaskContract;
use App\Models\Task;

class TaskService implements TaskContract
{
    public function index()
    {
    return Task::all();
    }

    public function store(TaskRequest $request)
    {
        Task::create($request->all());
    }

    public function update(TaskRequest $request,Task $task)
    {
        return $task->update($request->all());
    }

    public function destroy(Task $task)
    {
        return $task->delete();
    }
}
