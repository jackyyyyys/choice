@include('admin')

@section('content')

<div style="margin: 5px">

    <div class="row">
        <div class="col-md-4">
            Check In
        </div>

        <table class="table">
            <thead>
                <th>time</th>
                <th>group</th>
                <th>task</th>
            </thead>
            <tbody>
                @foreach($checkins as $checkin)


            </tbody>
        </table>
    </div>
</div>
