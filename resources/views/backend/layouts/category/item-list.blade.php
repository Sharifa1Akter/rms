@extends('backend.master')
@section('content')
<h1>Item under Category </h1>



<table class="table">

    <thead>
    <tr>
        <th scope="col">serial</th>
        <th scope="col"> name</th>
        <th scope="col"> food_category</th>
        <th scope="col"> price</th>
        <th scope="col"> details</th>
        <th scope="col"> image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($items as $key=>$data)

    <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->category_id}}</td>
        <td>{{$data->price}}</td>
        <td>{{$data->details}}</td>
        <td>
            <img src="{{ asset('app/uploads/'.$data->image) }}" width="100px" alt="image">
        </td>
        <td>{{$data->status}}</td>
    </tr>
@endforeach
    </tbody>
</table>
@endsection
