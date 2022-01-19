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

class HostageSaveAcceptionsController extends Controller
{
    //
    public function store(Request $request) {
        $group = Group::find($request->get('group'));
        $save = HostageSave::find($request->get('save'));

        $acception = new HostageSaveAcception;
        $acception->group()->associate($group);
        $acception->hostageSave()->associate($save);
        $acception->save();

        $group->has_hostage = FALSE;
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
