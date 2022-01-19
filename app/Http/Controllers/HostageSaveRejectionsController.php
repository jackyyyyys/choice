<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\HostageSave;
use App\HostageReplacement;
use App\HostageSaveRejection;
use App\HostageReplacementAcception;
use App\HostageReplacementRejection;
use App\HostageSaveAcception;

class HostageSaveRejectionsController extends Controller
{
    //
    public function store(Request $request) {
        $group = Group::find($request->get('group'));
        $save = HostageSave::find($request->get('save'));

        $rejection = new HostageSaveRejection;
        $rejection->group()->associate($group);
        $rejection->hostageSave()->associate($save);
        $rejection->save();

        $group->has_hostage = TRUE;
        $group->score = $group->score +20;
        $group->save();

        $save->solved = TRUE;
        $save->save();

	    $save_acceptions = HostageSaveAcception::orderBy('created_at', 'DESC')->get();
	    $save_rejections = HostageSaveRejection::orderBy('created_at', 'DESC')->get();
    	$replace_acceptions = HostageReplacementAcception::orderBy('created_at', 'DESC')->get();
	    $replace_rejections = HostageReplacementRejection::orderBy('created_at', 'DESC')->get();

        $groups = Group::all();
        $saves = HostageSave::all();
        $replacements = HostageReplacement::all();
        return view('admin/punish', compact('groups', 'saves', 'replacements', 'save_acceptions', 'save_rejections', 'replace_acceptions', 'replace_rejections'));
        }
}
