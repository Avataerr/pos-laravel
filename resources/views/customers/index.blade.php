@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
    <h2>Customer Accounts</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer['id'] }}</td>
                    <td>{{ $customer['name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection