@include('app')

@section('content')

<div class="container">
    <h1 class="display-4">Not to Save Hostage</h1>
    <p>Group: {{ $group->id }}</p>
</div>

<div class="container">
    <hr>
    <h4>Please wait for announcement from central OC moving to next station.</h4>
    <hr>
</div>

<div class="container">

    <a class="btn btn-primary btn-md btn-block" href="{{ url('task/checkin') }}">NEW TASK</a>
    <p class="text-muted">
        Press when you arrive at new station
    </p>

</div>
