@include('admin')

@section('content')

<div class="container">

    <div class="row">
    @foreach ($groups as $group)

        <div class="col-md-4" style="margin-bottom: 20px">

            <div class="row">
                <div class="col-md-8">
                    <h3>Group {{ $group->id }}</h3>
                    <h4>Currently at task: {{$group->current_task }}</h4>
                    <h5>Score: {{ $group->score }}</h5>
                    <h6>Hostage:
                        @if ($group->has_hostage == TRUE)
                        <strong class="btn-outline-success">YES</strong>
                        @elseif ($group->has_hostage == FALSE)
                        <strong class="btn-outline-primary">NO</strong>
                        @endif
                    </h6>
                    <h6>Patient:
                        @if ($group->has_patient == TRUE)
                        <strong class="btn-outline-success">YES</strong>
                        @elseif ($group->has_patient == FALSE)
                        <strong class="btn-outline-primary">NO</strong>
                        @endif
                    </h6>
                </div>
                <div class="col-md-4">
                    <ul class="list-group">
                        @if ($group->t1 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 1</li>
                        @elseif ($group->t1 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 1</li>
                        @endif
                        @if ($group->t2 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 2</li>
                        @elseif ($group->t2 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 2</li>
                        @endif
                        @if ($group->t3 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 3</li>
                        @elseif ($group->t3 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 3</li>
                        @endif
                        @if ($group->t4 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 4</li>
                        @elseif ($group->t4 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 4</li>
                        @endif
                        @if ($group->t5 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 5</li>
                        @elseif ($group->t5 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 5</li>
                        @endif
                        @if ($group->t6 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 6</li>
                        @elseif ($group->t6 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 6</li>
                        @endif
                        @if ($group->t7 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 7</li>
                        @elseif ($group->t7 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 7</li>
                        @endif
                        @if ($group->t8 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 8</li>
                        @elseif ($group->t8 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 8</li>
                        @endif
                        @if ($group->t9 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 9</li>
                        @elseif ($group->t9 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 9</li>
                        @endif
                        @if ($group->t10 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 10</li>
                        @elseif ($group->t10 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 10</li>
                        @endif
                        @if ($group->t11 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 11</li>
                        @elseif ($group->t11 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 11</li>
                        @endif
                        @if ($group->t12 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 12</li>
                        @elseif ($group->t12 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 12</li>
                        @endif
                        @if ($group->t13 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 13</li>
                        @elseif ($group->t13 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 13</li>
                        @endif
                        @if ($group->t14 == TRUE)
                            <li class="list-group-item list-group-item-success" style="padding:0px">Task 14</li>
                        @elseif ($group->t14 == FALSE)
                            <li class="list-group-item list-group-item-primary" style="padding:0px">Task 14</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>

    @endforeach
    </div>

    <div class="row">

        <div class="col-md-6">
            <h5>Complete</h5>
            <table class="table table-sm">
                <thead>
                    <th>group</th>
                    <th>task</th>
                    <th>type</th>
                    <th>time</th>
                </thead>
                <tbody>
                    @foreach($completions as $completion)
                    <tr>
                        <td>{{ $completion->group->id }}</td>
                        <td>{{ $completion->task->id }}</td>
                        <td>{{ $completion->taskCompletionType->name }}</td>
                        <td>{{ $completion->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-md-6">
            <h5>Failed->New Hostage</h5>
            <table class="table table-sm">
                <thead>
                    <th>group</th>
                    <th>task</th>
                    <th>time</th>
                </thead>
                <tbody>
                    @foreach($news as $new)
                    <tr>
                        <td>{{ $new->group->id }}</td>
                        <td>{{ $new->taskFailure->taskCompletion->task->id }}</td>
                        <td>{{ $new->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
