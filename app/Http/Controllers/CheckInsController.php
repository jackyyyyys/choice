<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CheckIn;
use App\Group;
use App\TaskCompletionType;
use App\TaskSequence;
use App\Task;

class CheckInsController extends Controller
{
    // request form
    public function create()
    {
        $groups = Group::pluck('name', 'id');
        $tasks = Task::pluck();

        return view('game/checkin', compact('groups', 'tasks'));
    }

    // submit form
    public function store(Request $request)
    {
        // confirm checkin
        $group = Group::find($request->get('group')+1);
        $task = Task::find($request->get('task')+1);
        $checkIn = new CheckIn;
        $checkIn->group()->associate($group);
        $checkIn->task()->associate($task);
        $group->current_task = $task->id;
        $checkIn->save();
        $group->save();
        $types = TaskCompletionType::pluck('name', 'id');
        return view('task/complete', compact('group', 'task', 'types'));    }

    public function show($id)
    {

    }

    public function index()
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
