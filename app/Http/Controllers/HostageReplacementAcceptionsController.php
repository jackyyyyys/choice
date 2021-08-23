<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\HostageReplacement;
use App\HostageReplacementAcception;
use App\HostageSave;
use App\HostageSaveRejection;
use App\HostageReplacementRejection;
use App\HostageSaveAcception;

class HostageReplacementAcceptionsController extends Controller
{
    //
    public function store(Request $request) {
        $group = Group::find($request->get('group'));
        $replacement = HostageReplacement::find($request->get('replacement'));

        $acception = new HostageReplacementAcception;
        $acception->group()->associate($group);
        $acception->hostageReplacement()->associate($replacement);
        $acception->save();

        $group->has_hostage = TRUE;
        $group->score = $group->score -30;
        $group->save();

        $replacement->solved = TRUE;
        $replacement->save();

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
