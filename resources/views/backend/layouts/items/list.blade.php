@extends ('backend.master')

@section('content')
<h1>Item List</h1>
<a href="{{route('items.create')}}" class="btn btn-info"><i class="bi bi-list-nested"></i>
    Create New Item</a>

    @if(session()->has('message'))
    <div class="row" style="padding: 10px;">
        <span class="alert alert-success">{{session()->get('message')}}</span>
    </div>
@endif

    <div class="row justify-content-center">
            <div class="col-md-10">

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


                        <td>
                            <a href="" class="btn btn-success">View</a>
                            <a href="{{route('items.edit',$data->id)}}" class="btn btn-warning">Edit</a>
                <a onclick="return confirm('Are you sure you want to delete this item?');" href="{{route('items.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>


                    @endforeach
                    </tbody>
                </table>


                {{ $items->links() }}

            </div>

            </div>
    @endsection
