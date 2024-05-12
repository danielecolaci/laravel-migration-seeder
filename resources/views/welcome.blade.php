@extends('layouts.app')

@section('content')
    <table class="table table-borderless">
        <thead>
            <tr>
                <th>Code</th>
                <th>Company</th>
                <th>From</th>
                <th>To</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>On Time</th>
                <th>Cancelled</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->train_code }}</td>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                    <td>{{ $train->on_time ? 'Yes' : 'No' }}</td>
                    <td>{{ $train->cancelled ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
