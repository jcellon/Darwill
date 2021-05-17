@extends('layout')

@section('navbar')    
@endsection

@section('content')

    <div class="jumbotron text-center">
        <h4 style="padding-bottom: 15px;">{{$title}}</h4>
        <table class="table table-dark">
            <thead>
                <tr>
                    <td>Owner Id</td>
                    <td>Office Id</td>
                    <td>Office address</td>
                    <td>Office hours</td>
                    <td>Office phone number</td>
                    <td>Assigned Zip Code</td>
                </tr>
            </thead>
            @foreach ($datas as $data)
            <tbody>
                <tr>
                    <td>{{ $data->owner_id }}</td>
                    <td>{{ $data->office_id }}</td>
                    <td>{{ $data->office_address }}</td>
                    <td>{{ $data->office_hours }}</td>
                    <td>{{ $data->office_phone_number }}</td>
                    <td>{{ $data->assigned_zipcode }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
            


@endsection
