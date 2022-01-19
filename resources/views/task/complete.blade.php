@include('app')

@section('content')

<div class="container">
    <h1 class="display-4">Task {{$task->id }}</h1>
</div>

<div class="container">
    <hr>
    <h4>Please wait for announcement from central OC to begin task</h4>
    <hr>
</div>

<div class="container">
    <h1 class="display-4">Task Complete</h1>
    <p>Group: {{ $group->id }} | Task: {{$task->id }} </p>
    <p>Please choose<strong> action </strong>from below</p>
</div>

<div class="container">
    <hr>
</div>

<div id="success" class="container">
    {!! Form::open(array(
        'route' => 'task_completions.store',
        'class' => 'form'
    )) !!}

    <div class="form-group">
        {!! Form::hidden('group', $group->id, array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::hidden('task', $task->id, array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::hidden('type', 1, array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::submit($types[1], array(
            'class' => "btn btn-primary btn-md btn-block"
        )) !!}
    </div>

    {!! Form::close() !!}
</div>

<div class="container">
    <hr>
</div>

<div id="success" class="container">
    {!! Form::open(array(
        'route' => 'task_completions.store',
        'class' => 'form'
    )) !!}

    <div class="form-group">
        {!! Form::hidden('group', $group->id, array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::hidden('task', $task->id, array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::hidden('type', 2, array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::submit($types[2], array(
            'class' => "btn btn-primary btn-md btn-block"
        )) !!}
    </div>

    {!! Form::close() !!}
</div>

<div class="container">
    <hr>
</div>

<div id="giveup" class="container">
    {!! Form::open(array(
        'route' => 'task_completions.store',
        'class' => 'form'
    )) !!}

    <div class="form-group">
        {!! Form::hidden('group', $group->id, array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::hidden('task', $task->id, array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::hidden('type', 3, array(
            'class' => 'form-control'
        )) !!}
    </div>

    <div class="form-group">
        {!! Form::submit($types[3], array(
            'class' => "btn btn-primary btn-md btn-block"
        )) !!}
    </div>

    {!! Form::close() !!}
    <p><small>available after first failed task</small></p>

</div>
