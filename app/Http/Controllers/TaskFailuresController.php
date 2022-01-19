<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\TaskCompletion;
use App\TaskFailureChoice;
use App\TaskFailure;
use App\HostageReplacement;
use App\HostageNoReplacement;
use App\HostageReplacementChoice;
use App\NewHostage;

class TaskFailuresController extends Controller
{
    //
    public function store(Request $request)
    {
        $choice = TaskFailureChoice::find($request->get('choice'));
        $group = Group::find($request->get('group'));
        $completion = TaskCompletion::find($request->get('taskCompletion'));
        $group->has_failed = TRUE;

        $failure = new TaskFailure;
        $failure->group()->associate($group);
        $failure->taskCompletion()->associate($completion);
        $failure->save();

        switch ( $choice->id )
        {
            case 1: // Replace
                $replacement = new HostageReplacement();
                $replacement->group()->associate($group);
                $replacement->taskFailure()->associate($failure);
                $replacement->save();
                $choices = HostageReplacementChoice::all();
                return view('hostage/replace', compact('group', 'failure', 'choices'));
            case 2: // NO Replace
                $noReplacement = new HostageNoReplacement();
                $noReplacement->group()->associate($group);
                $noReplacement->taskFailure()->associate($failure);
                $noReplacement->save();
                $group->score = $group->score -10;
                $group->save();
                // BRANCH END
                return view('hostage/noReplace', compact('group', 'failure'));
            case 3: // New Hostage
                $new = new NewHostage();
                $new->group()->associate($group);
                $new->taskFailure()->associate($failure);
                $new->save();
                $group->score = $group->score -20;
                $group->save();
                // BRANCH END
                return view('hostage/newHostage', compact('group', 'failure'));
        }
    }

}
