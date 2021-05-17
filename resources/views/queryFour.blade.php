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
            


@endsection
