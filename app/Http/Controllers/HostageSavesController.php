<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\HostageSave;
use App\HostageSaveChoice;
use App\HostageSaveAcception;
use App\HostageSaveRejection;

class HostageSaveController extends Controller
{
    //
    public function store(Request $request)
    {
        $choice = HostageSaveChoice::find($request->get('choice'));
        $group = Group::find($request->get('group'));
        $save = HostageSave::find($request->get('hostageSave'));

        switch ( $choice->id )
        {
            case 1: // Accept
                $acception = new HostageSaveAcception();
                $acception->group()->associate('group');
                $acception->hostageSave()->associate('save');
                $acception->save();
                // BRANCH END
                return view('task/successs/save/accept', compact('group', 'save'));
            case 2: // Reject
                $rejection = new HostageSaveRejection;
                $rejection->group()->associate('group');
                $rejection->hostageSave()->associate('save');
                $rejection->save();
                // BRANCH END
                return view('task/success/save/reject', compact('group', 'save'));
        }
    }
}
