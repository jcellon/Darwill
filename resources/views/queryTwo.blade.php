@extends('layout')

@section('navbar')    
@endsection

@section('content')

    <div class="jumbotron text-center">
        <h4 style="padding-bottom: 15px;">{{$title}}</h4>
        <table class="table table-dark">
            <thead>
                <tr>
                    <td>Associated Zip Code</td>
                    <td>First Associated Office Id</td>
                    <td>Second Associated Office Id</td>
                </tr>
            </thead>
            @foreach ($datas as $data)
            <tbody>
                <tr>
                    <td>{{ $data->assigned_zipcode }}</td>
                    <td>{{ $data->office_id }}</td>
                    <td>{{ $data->assigned_office_id }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
            


@endsection
