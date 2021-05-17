@extends('layout')

@section('navbar')    
@endsection

@section('content')

    <div class="jumbotron text-center">
        <h4 style="padding-bottom: 15px;">{{$title}}</h4>
        <table class="table table-dark">
            <thead>
                <tr>
                    <td>Assigned Office Id</td>
                    <td>Customer Firstname</td>
                    <td>Customer Lastname</td>
                    <td>Customer Address</td>
                    <td>Customer Zip Code</td>
                    <td>Date of Last Purchase</td>
                </tr>
            </thead>
            @foreach ($datas as $data)
            <tbody>
                <tr>
                    <td>{{ $data->assigned_office_id }}</td>
                    <td>{{ $data->customer_firstname }}</td>
                    <td>{{ $data->customer_lastname }}</td>
                    <td>{{ $data->customer_address }}</td>
                    <td>{{ $data->customer_zipcode }}</td>
                    <td>{{ $data->date_of_last_purchase }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
            


@endsection
