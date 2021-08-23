<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\TaskCompletion;
use App\TaskSuccessChoice;
use App\TaskSuccess;
use App\HostageSave;
use App\HostageNoSave;
use App\HostageSaveChoice;

class TaskSuccessController extends Controller
{
    //
    public function store(Request $request)
    {
        $choice = TaskSuccessChoice::find($request->get('choice'));
        $group = Group::find($request->get('group'));
        $completion = TaskCompletion::find($request->get('taskCompletion'));

        $success = new TaskSuccess;
        $success->group()->associate($group);
        $success->taskCompletion()->associate($completion);
        $success->save();

        switch ( $choice->id )
        {
            case 1: // Save
                $save = new HostageSave;
                $save->group()->associate($group);
                $save->taskSuccess()->associate($success);
                $save->save();
                $choices = HostageSaveChoice::all();
                return view('hostage/save', compact('group', 'taskSuccess', 'choices'));
            case 2: // NO Save
                $noSave = new HostageNoSave;
                $noSave->group()->associate($group);
                $noSave->taskSuccess()->associate($success);
                $noSave->save();
                $group->score = $group->score +30;
                $group->save();
                // BRANCH END
                return view('hostage/noSave', compact('group', 'taskSuccess'));
        }
    }

}
