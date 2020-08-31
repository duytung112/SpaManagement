@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Customer List</h1>
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Date of Birth</th>
                        <th>Description</th>
                        <th>Reason</th>
                    </tr>
                </thead>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->dob }}</td>
                    <td>{{ $customer->description }}</td>
                    <td>{{ $customer->reason }}</td>
                </tr>
                @endforeach
            </table>
    </div>
@endsection
