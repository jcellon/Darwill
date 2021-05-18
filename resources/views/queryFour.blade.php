@extends('layout')

@section('navbar')    
@endsection

@section('content')

    <div class="jumbotron text-center">
        <h4 style="padding-bottom: 15px;">{{$title}}</h4>
        <table class="table table-dark">
            <thead>
                <tr>
                    <td>Number of Customers Not Associated with Territory</td>
                    <td>Assigned Office Id</td>
                </tr>
            </thead>
            @foreach ($datas as $data)
            <tbody>
                <tr>
                    <td>{{ $data->customer_lastname }}</td>
                    <td>{{ $data->assigned_office_id }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
            
    <div class="alert alert-primary" role="alert">
        <samp>select count(ct.customer_lastname) as customer_lastname, max(ct.assigned_office_id) as assigned_office_id from office_territories ot right join customers ct on ot.office_id = ct.assigned_office_id WHERE ot.owner_id is null and ot.office_id is null group by ct.customer_lastname</samp>
    </div>

@endsection
