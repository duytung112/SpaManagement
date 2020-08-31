@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Customer List</h1>
            <table class="table table-light table-hover table-responsive">
                <thead>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Phone</td>
                    <td>Address</td>
                    <td>Date of Birth</td>
                    <td>Description</td>
                    <td>Reason</td>
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
