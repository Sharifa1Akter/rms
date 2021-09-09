@extends('backend.master')

@section('content')
    <h2>Customer List</h2>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($user as $data)
            <tr>
                <th scope="row">1</th>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->role}}</td>

                <td class="text-center">
                    <a class="btn btn-primary" href="{{ route('customer.edit',$dat->id) }}">Edit</a>
                    <a class="btn btn-danger" href="">Delete</a>
{{--                    <a class="btn btn-warning" href="">View</a>--}}
                    <a class="btn btn-success" href="">View</a>

                </td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
