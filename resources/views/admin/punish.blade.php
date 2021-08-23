@include('admin')

@section('content')

<div style="margin: 10px">

    <div class="row">

        <div id="save" class="col-6">

            <h1 class="display-4">Saves</h1>

            <table class="table">
                <thead>
                    <th>Group</th>
                    <th>Succeeded Task</th>
                    <th>Time</th>
                    <th colspan="2">Action</th>
                </thead>

                <tbody>

                    @foreach($saves as $save)
                    @if($save->solved == FALSE)

                    <tr>
                        <td>{{ $save->group->id }}</td>
                        <td>{{ $save->taskSuccess->taskCompletion->task->id }}</td>
                        <td>{{ $save->created_at }}</td>

                        <td>
                            {!! Form::open(array(
                                'route' => 'hostage_save_acceptions.store',
                                'class' => 'form'
                            )) !!}

                            {!! Form::hidden('group', $save->group->id, array(
                                'class' => 'form-control'
                            )) !!}

                            {!! Form::hidden('save', $save->id, array(
                                'class' => 'form-control'
                            )) !!}

                            {!! Form::submit('Accept', array(
                                'class' => "btn btn-primary btn-md btn-block"
                            )) !!}

                            {!! Form::close() !!}
                        </td>
                        <td>
                            {!! Form::open(array(
                                'route' => 'hostage_save_rejections.store',
                                'class' => 'form'
                            )) !!}

                            {!! Form::hidden('group', $save->group->id, array(
                                'class' => 'form-control'
                            )) !!}

                            {!! Form::hidden('save', $save->id, array(
                                'class' => 'form-control'
                            )) !!}

                            {!! Form::submit('Reject', array(
                                'class' => "btn btn-primary btn-md btn-block"
                            )) !!}

                            {!! Form::close() !!}
                        </td>
                        @endif

                    </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

        <div id="replace" class="col-6">

            <h1 class="display-4">Replacements</h1>

            <table class="table">
                <thead>
                    <th>Group</th>
                    <th>Failed Task</th>
                    <th>Time</th>
                    <th colspan="2">Action</th>
                </thead>

                <tbody>

                    @foreach($replacements as $replacement)
                    @if($replacement->solved == FALSE)

                    <tr>
                        <td>{{ $replacement->group->id }}</td>
                        <td>{{ $replacement->taskFailure->taskCompletion->task->id }}</td>
                        <td>{{ $replacement->created_at }}</td>
                        <td>
                            {!! Form::open(array(
                                'route' => 'hostage_replacement_acceptions.store',
                                'class' => 'form'
                            )) !!}

                            {!! Form::hidden('group', $replacement->group->id, array(
                                'class' => 'form-control'
                            )) !!}

                            {!! Form::hidden('replacement', $replacement->id, array(
                                'class' => 'form-control'
                            )) !!}

                            {!! Form::submit('Accept', array(
                                'class' => "btn btn-primary btn-md btn-block"
                            )) !!}

                            {!! Form::close() !!}
                        </td>
                        <td>
                            {!! Form::open(array(
                                'route' => 'hostage_replacement_rejections.store',
                                'class' => 'form'
                            )) !!}

                            {!! Form::hidden('group', $replacement->group->id, array(
                                'class' => 'form-control'
                            )) !!}

                            {!! Form::hidden('replacement', $replacement->id, array(
                                'class' => 'form-control'
                            )) !!}

                            {!! Form::submit('Reject', array(
                                'class' => "btn btn-primary btn-md btn-block"
                            )) !!}

                            {!! Form::close() !!}
                        </td>
                    </tr>

                    @endif
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>

    <div class="row">

        <div class="col-md-3">
            <h5>SAVE: Accept</h5>
            <table class="table table-sm">
                <thead>
                    <th>group</th>
                    <th>task</th>
                    <th>time</th>
                </thead>
                <tbody>
                    @foreach($save_acceptions as $save_acception)
                    <tr>
                        <td>{{ $save_acception->group->id }}</td>
                        <td>{{ $save_acception->hostageSave->taskSuccess->taskCompletion->task->id }}</td>
                        <td>{{ $save_acception->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-3">
            <h5>SAVE: Reject</h5>
            <table class="table table-sm">
                <thead>
                    <th>group</th>
                    <th>task</th>
                    <th>time</th>
                </thead>
                <tbody>
                    @foreach($save_rejections as $save_rejection)
                    <tr>
                        <td>{{ $save_rejection->group->id }}</td>
                        <td>{{ $save_rejection->hostageSave->taskSuccess->taskCompletion->task->id }}</td>
                        <td>{{ $save_rejection->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-3">
            <h5>REPLACE: Accept</h5>
            <table class="table table-sm">
                <thead>
                    <th>group</th>
                    <th>task</th>
                    <th>time</th>
                </thead>
                <tbody>
                    @foreach($replace_acceptions as $replace_acception)
                    <tr>
                        <td>{{ $replace_acception->group->id }}</td>
                        <td>{{ $replace_acception->hostageReplacement->taskFailure->taskCompletion->task->id }}</td>
                        <td>{{ $replace_acception->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-3">
            <h5>REPLACE: Reject</h5>
            <table class="table table-sm">
                <thead>
                    <th>group</th>
                    <th>task</th>
                    <th>time</th>
                </thead>
                <tbody>
                    @foreach($replace_rejections as $replace_rejection)
                    <tr>
                        <td>{{ $replace_rejection->group->id }}</td>
                        <td>{{ $replace_rejection->hostageReplacement->taskFailure->taskCompletion->task->id }}</td>
                        <td>{{ $replace_rejection->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>
