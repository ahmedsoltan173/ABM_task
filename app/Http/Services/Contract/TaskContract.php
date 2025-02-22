<?php
namespace App\Http\Services\Contract;

use App\Http\Requests\TaskRequest;
use Illuminate\Console\View\Components\Task;

interface TaskContract
{
    public function index();
    public function store(TaskRequest $request);
    public function update(TaskRequest $request,Task $task);
    public function destroy(Task $task);
}
