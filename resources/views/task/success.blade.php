@include('app')

@section('content')

<div class="container">
    <h1 class="display-4">Task Succeeded</h1>
    <p>Group: {{ $group->id }} | Task: {{$task->id }} </p>
    <p>Please choose <strong>action</strong> from below</p>
</div>

<div class="container">
    <hr>
</div>

<div id="save" class="container">
    {!! Form::open(array(
        'route' => 'task_successes.store',
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

<div id="noSave" class="container">
    {!! Form::open(array(
        'route' => 'task_successes.store',
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
