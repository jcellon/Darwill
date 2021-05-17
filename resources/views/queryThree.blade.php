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
            


@endsection
