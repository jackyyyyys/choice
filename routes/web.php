<?php

use App\Group;
use App\Task;
use App\TaskCompletionType;
use App\HostageSave;
use App\HostageReplacement;
use App\HostageSaveAcceptions;
use App\HostageSaveRejection;
use App\HostageReplacementAcception;
use App\HostageReplacementRejection;
use App\HostageSaveAcception;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('app');
});

Route::get('start', function () {
    $groups = Group::pluck('id');
    $tasks = Task::orderBy('id')->pluck('id');
    return view('task/checkin', compact('groups', 'tasks'));
});

Route::get('task/checkin', function () {
    $groups = Group::pluck('id');
    $tasks = Task::orderBy('id')->pluck('id');
    return view('task/checkin', compact('groups', 'tasks'));
});

Route::get('task/complete', function () {
    $groups = Group::pluck('id');
    $tasks = Task::orderBy('id')->pluck('id');
    $types = TaskCompletionType::pluck('name', 'id');
    return view('task/complete', compact('groups', 'tasks', 'types'));
});

Route::get('punish', function() {
    $save_acceptions = HostageSaveAcception::orderBy('created_at', 'DESC')->get();
    $save_rejections = HostageSaveRejection::orderBy('created_at', 'DESC')->get();
    $replace_acceptions = HostageReplacementAcception::orderBy('created_at', 'DESC')->get();
    $replace_rejections = HostageReplacementRejection::orderBy('created_at', 'DESC')->get();

    $groups = Group::all();
    $saves = HostageSave::all();
    $replacements = HostageReplacement::all();
    return view('admin/punish', compact('groups', 'saves', 'replacements', 'save_acceptions', 'save_rejections', 'replace_acceptions', 'replace_rejections'));
});

Route::resource('check_ins', 'CheckInsController');
Route::resource('configs', 'ConfigsController');
Route::resource('groups', 'GroupsController');
Route::resource('hostage_no_replacements', 'HostageNoReplacementsController');
Route::resource('hostage_no_saves', 'HostageNoSavesController');
Route::resource('hostage_replacement_acceptions', 'HostageReplacementAcceptionsController');
Route::resource('hostage_replacement_rejections', 'HostageReplacementRejectionsController');
Route::resource('hostage_replacements', 'HostageReplacementsController');
Route::resource('hostage_save_acceptions', 'HostageSaveAcceptionsController');
Route::resource('hostage_save_rejections', 'HostageSaveRejectionsController');
Route::resource('hostage_saves', 'HostageSavesController');
Route::resource('new_hostages', 'NewHostagesController');
Route::resource('stations', 'StationsController');
Route::resource('task_completions', 'TaskCompletionsController');
Route::resource('task_failures', 'TaskFailuresController');
Route::resource('task_giveups', 'TaskGiveupsController');
Route::resource('tasks', 'TasksController');
Route::resource('task_sequences', 'TaskSequencesController');
Route::resource('task_successes', 'TaskSuccessController');
