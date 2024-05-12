@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Trains</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Departure Station</th>
                    <th>Arrival Station</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                    <th>Train Code</th>
                    <th>Number of Carriages</th>
                    <th>On Time</th>
                    <th>Cancelled</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->num_carriages }}</td>
                        <td>{{ $train->on_time ? 'Yes' : 'No' }}</td>
                        <td>{{ $train->cancelled ? 'Yes' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
