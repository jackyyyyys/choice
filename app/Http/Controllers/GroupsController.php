<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\TaskCompletion;
use App\TaskGiveup;
use App\NewHostage;

class GroupsController extends Controller
{
    //
    public function index() {
        $groups = Group::all();
        $completions = TaskCompletion::orderBy('created_at', 'DESC')->get();
        $giveups = TaskGiveup::all();
        $news = NewHostage::orderBy('created_at', 'DESC')->get();

        return view('admin/main', compact('groups', 'completions', 'giveups', 'news'));
    }
}
