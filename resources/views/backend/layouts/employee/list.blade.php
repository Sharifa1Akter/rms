@extends ('backend.master')

@section('content')
    <div class="row justify-content-center">
            <div class="col-md-10">
                <h1>Employee List</h1>
                <a href="{{route('employee.create')}}" class="btn btn-info"> <i class="bi bi-people-fill"></i>
            Create New Employee  </a>
                <table class="table">

                    <thead>
                    <tr>
                        <th scope="col">serial</th>
                        <th scope="col"> Name</th>
                        <th scope="col"> Phone Number</th>
                        <th scope="col"> Email</th>
                        <th scope="col"> Password</th>

                        <th class="text text-center"scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
        @foreach($list as $key=>$data)

                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{$data->name}}</td>
                        <td>{{$data->phone_number}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->password}}</td>


                        <td class="text-center">
                            <a class="btn btn-primary" href="{{ route('backend.employee.edit',$data->id) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('employee.delete',$data->id) }}">Delete</a>
        {{--                    <a class="btn btn-warning" href="">View</a>--}}
                            <a class="btn btn-success" href="{{ route('backend.employee.view',$data->id) }}">View</a>

                        </td>




                    </tr>
        @endforeach
                    </tbody>



                </table>

            </div>

            </div>
    @endsection
