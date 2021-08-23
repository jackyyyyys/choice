<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Group;
use App\Task;
use App\TaskCompletionType;
use App\TaskCompletion;
use App\TaskSuccessChoice;
use App\TaskFailureChoice;

class TaskCompletionsController extends Controller
{
    //
    public function store(Request $request)
    {
        $group = Group::find($request->get('group'));
        $task = Task::find($request->get('task'));
        $type = TaskCompletionType::find($request->get('type'));
        $completion = new TaskCompletion;
        $completion->group()->associate($group);
        $completion->task()->associate($task);
        $completion->taskCompletionType()->associate($type);
        $completion->save();
        $group['t'.$task->id] = TRUE;
        $group->save();

        switch ( $type->id )
        {
            case 1: // Success
                $choices = TaskSuccessChoice::all();
                return view('task/success', compact('group', 'task', 'completion', 'choices'));
            case 2: // Fail
                $group->has_failed = TRUE;
                $group->save();
                $choices = TaskFailureChoice::all();
                return view('task/failure', compact('group', 'task', 'completion', 'choices'));
            case 3: // Give Up
                // BRANCH END
                $group->score = $group->score -5;
                $group->save();
                return view('task/giveup', compact('group', 'task', 'completion'));
        }

    }

}
