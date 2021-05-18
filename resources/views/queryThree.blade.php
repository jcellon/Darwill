@extends('layout')

@section('navbar')    
@endsection

@section('content')

    <div class="jumbotron text-center">
        <h4 style="padding-bottom: 15px;">{{$title}}</h4>
        <table class="table table-dark">
            <thead>
                <tr>
                    <td>Number of Customers Associated</td>
                    <td>Associated Owner Id</td>
                    <td>Associated Office Id</td>
                </tr>
            </thead>
            @foreach ($datas as $data)
            <tbody>
                <tr>
                    <td>{{ $data->customer_lastname }}</td>
                    <td>{{ $data->owner_id }}</td>
                    <td>{{ $data->office_id }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
            
    <div class="alert alert-primary" role="alert">
        <samp>select count(distinct ct.customer_lastname) as customer_lastname, max(ot.owner_id) as owner_id, max(ot.office_id) as office_id from office_territories ot inner join customers ct on ot.office_id = ct.assigned_office_id group by ct.customer_lastname</samp>
    </div>

@endsection
