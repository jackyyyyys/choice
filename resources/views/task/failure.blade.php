@include('app')

@section('content')

<div class="container">
    <h1 class="display-4">Task Failed</h1>
    <p>Group: {{ $group->id }} | Task: {{$task->id }} </p>
    <p>Please choose <strong>action</strong> from below</p>
</div>

<div class="container">
    <hr>
</div>

<div id="replace" class="container">
    {!! Form::open(array(
        'route' => 'task_failures.store',
        'class' => 'form'
    )) !!}

    <div class="form-group">
        {!! Form::hidden('group', $group->id, array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::hidden('taskCompletion', $completion->id, array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::hidden('choice', $choices[0]['id'], array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::submit($choices[0]['name'], array(
            'class' => "btn btn-primary btn-md btn-block"
        )) !!}
    </div>

    {!! Form::close() !!}
</div>

<div id="no replace" class="container">
    {!! Form::open(array(
        'route' => 'task_failures.store',
        'class' => 'form'
    )) !!}

    <div class="form-group">
        {!! Form::hidden('group', $group->id, array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
            {!! Form::hidden('taskCompletion', $completion->id, array(
                'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::hidden('choice', $choices[1]['id'], array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::submit($choices[1]['name'], array(
            'class' => "btn btn-primary btn-md btn-block"
        )) !!}
    </div>

    {!! Form::close() !!}
</div>

<div class="container">
    <p><small>choose if the group had hostage in the punishment zone</small></p>
    <hr>
</div>

<div id="new_hostage" class="container">
    {!! Form::open(array(
        'route' => 'task_failures.store',
        'class' => 'form'
    )) !!}

    <div class="form-group">
        {!! Form::hidden('group', $group->id, array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
            {!! Form::hidden('taskCompletion', $completion->id, array(
                'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::hidden('choice', $choices[2]['id'], array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::submit($choices[2]['name'], array(
            'class' => "btn btn-primary btn-md btn-block"
        )) !!}
    </div>

    {!! Form::close() !!}

    <p><small>choose if the group <strong>does not</strong> have hostage in the punishment zone</small></p>
</div>
