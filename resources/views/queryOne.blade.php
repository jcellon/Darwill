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
                    {{-- <td>Assigned Zip Code</td> --}}
                    <td>Number of Zip Codes</td>
                </tr>
            </thead>
            @foreach ($datas as $data)
            <tbody>
                <tr>
                    <td>{{ $data->owner_id }}</td>
                    <td>{{ $data->office_id }}</td>
                    {{-- <td>{{ $data->assigned_zipcode }}</td> --}}
                    <td>{{ $data->assigned_zipcode }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>        
    </div>

    <div class="alert alert-primary" role="alert">
        <samp>select distinct max(owner_id) as owner_id, office_id, count(assigned_zipcode) as assigned_zipcode from office_territories group by office_id</samp>
    </div>          

@endsection
