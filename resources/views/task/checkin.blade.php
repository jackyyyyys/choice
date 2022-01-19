@include('app')

@section('content')

<div class="container">
    <h1 class="display-4">New Task</h1>
    <p>Please choose <strong>group</strong> and <strong>task</strong> from below</p>
</div>

<div class="container">
    {!! Form::open(array(
        'route' => 'check_ins.store',
        'class' => 'form'
    )) !!}

    <div class="row">

        <div class="col">
            <div class="form-group">
                {!! Form::label('Group') !!}
                {!! Form::select('group', $groups, null, array(
                    'class' => 'form-control'
                )) !!}
            </div>
        </div>

        <div class="col">
            <div class="form-group">
                {!! Form::label('Task') !!}
                {!! Form::select('task', $tasks, null, array(
                    'class' => 'form-control'
                )) !!}
            </div>
        </div>

    </div>

    <div class="form-group">
        {!! Form::submit('Check In', array(
            'class' => "btn btn-primary btn-md btn-block"
        )) !!}
    </div>

    {!! Form::close() !!}
</div>

<div class="container">
    <hr>
    <h4>Please wait for announcement from central OC for a new round to begin after checking in.</h4>
    <hr>
</div>

<div class="container">
    <h4>Please tell central OC if your group are to attemp the following tasks</h4>
    <ul>
        <li>Task 4 (Easy or Hard)</li>
        <li>Task 9 (Second Chance)</li>
    </ul>
</div>
